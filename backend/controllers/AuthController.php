<?php

namespace app\controllers;

use app\models\Users;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\InvalidRouteException;
use yii\db\Exception;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\rest\ActiveController;
//use app\web\User;
use yii\web\ErrorAction;

class AuthController extends ActiveController
{
    public $modelClass = Users::class;
    public function behaviors(): array
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [],
                'actions' => [
                    'incoming' => [
                        'Origin' => ['*'],
                        'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                        'Access-Control-Request-Headers' => ['*'],
                        'Access-Control-Allow-Credentials' => null,
                        'Access-Control-Max-Age' => 86400,
                        'Access-Control-Expose-Headers' => [],
                    ],
                ],
            ],
        ]);
    }
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ]
        ];
    }
    public function returnError(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ]
        ];
    }
    public function actionSignIn(): array
    {
        $request = Yii::$app->request;
        $username = $request->getBodyParam('username');
        $password = $request->getBodyParam('password');
        if (!isset($username, $password)) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'Please enter the username and password.',
                'method' => 'Login',
            ];
        }
        $user = Users::findOne(['username' => $username]);
        if (!$user) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'User not found. Please retry.',
                'method' => 'Login',
            ];
        }
        if (!Yii::$app->getSecurity()->validatePassword($password, $user->password)) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'Incorrect password.',
                'method' => 'Login',
            ];
        }
        if ($user->status === Users::STATUS_INACTIVE) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'You need to activate your account.',
                'method' => 'Login',
            ];
        }
        if ($user->status === Users::STATUS_ACTIVE) {
            Yii::$app->user->login($user);
            return [
                'message' => 'Success.',
                'method' => 'Login',
            ];
        }
        throw new \UnhandledMatchError('Unhandled error.');
    }
    /**
     * @throws InvalidConfigException
     * @throws \yii\httpclient\Exception
     */
    public function actionGetEpicAccessToken(): false|string
    {
        $request = Yii::$app->request;
        $code = $request->getQueryParam('code');

        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('POST')
            ->setFormat(yii\httpclient\Client::FORMAT_URLENCODED)
            ->setUrl($_ENV['APP_EPIC_URL'])
            ->setHeaders(['Authorization' => $_ENV['APP_EPIC_AUTH']])
            ->setData([
                'grant_type' => 'authorization_code',
                'scope' => 'basic_profile email friends_list',
                'code' => $code
            ])
            ->send();
        return $response->data;
        //$data = explode('.', $response->data['access_token']);
        //return base64_decode($data[0]).base64_decode($data[1]);
        //Yii::$app->response->redirect('/', 301)->send();
    }
    /**
     * @throws InvalidRouteException
     */
    public function actionLogout(): void
    {
        Yii::$app->user->logout();
        Yii::$app->response->redirect('/', 301)->send();
    }
    /**
     * @throws Exception
     * @throws \yii\base\Exception
     */
    public function actionSignUp(): array
    {
        $request = Yii::$app->request;
        $username = $request->getBodyParam('username');
        $email = $request->getBodyParam('email');
        $password = Yii::$app->getSecurity()->generatePasswordHash($request->getBodyParam('password'));
        $activateToken = trim(Yii::$app->security->generateRandomString(), '-');
        $user = Users::findOne(['email' => $email, 'username' => $username]);
        if ($user) {
            Yii::$app->response->statusCode = 400;
            if ($user->username === $username) {
                return [
                    'message' => 'Account with this username is already registered.',
                    'method' => 'Registration',
                ];
            }
            if ($user->email === $email) {
                return [
                    'message' => 'Account with this email is already registered.',
                    'method' => 'Registration',
                ];
            }
            return [
                'message' => 'Account already registered.',
                'method' => 'Registration',
            ];
        }
        Yii::$app->db->createCommand()->insert('users', [
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'activateToken' => $activateToken,
        ])->execute();
        Yii::$app->mailer->compose()
            ->setFrom(['super.gird2012@yandex.ru' => 'voorhu.com'])
            ->setTo($email)
            ->setSubject('Account activation')
            ->setTextBody('Please activate your account by clicking the following link: ' . Yii::$app->urlManager->createAbsoluteUrl(['activation', 'token' => $activateToken]))
            ->send();
        return [
            'message' => 'Please check your email for activation instructions.',
            'method' => 'Registration',
        ];
    }
    /**
     * @return array
     * @throws Exception
     */
    public function actionActivation(): array
    {
        $request = Yii::$app->request;
        $token = $request->getBodyParam('token');
        if ($token === '' && strlen($token) !== 32) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'Invalid activation token.',
                'method' => 'Activation',
            ];
        }
        $user = Users::findOne(['activateToken' => $token]);
        if (!$user) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'Account activation token not found.',
                'method' => 'Activation',
            ];
        }
        if ($user->status === Users::STATUS_ACTIVE) {
            Yii::$app->response->statusCode = 400;
            return [
                'message' => 'Your account has already been activated.',
                'method' => 'Activation',
            ];
        }
        $user->status = Users::STATUS_ACTIVE;
        $user->save();
        Yii::$app->user->login($user);
        return [
            'status' => true,
            'message' => 'The account has been successfully activated.',
            'method' => 'Activation',
        ];
    }
    public function actionStatus(): array
    {
        return [
            'status' => (bool) (Yii::$app->user->identity->status ?? 0),
            'method' => 'Status',
        ];
    }
}
