<?php

namespace app\controllers;

use app\models\Users;
use UnhandledMatchError;
use Throwable;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\InvalidRouteException;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\rest\Controller;
use yii\web\BadRequestHttpException;
use yii\web\ErrorAction;
use yii\web\Response;

class AuthController extends Controller
{
    public $enableCsrfValidation = false;
    public function behaviors(): array
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Credentials' => null,
                    'Access-Control-Max-Age' => 86400,
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
    public function actionSignIn(): array
    {
        $username = Yii::$app->request->getBodyParam('username');
        $password = Yii::$app->request->getBodyParam('password');
        Yii::$app->response->statusCode = 400;
        if (!isset($username, $password)) {
            return [
                'message' => 'errors.login.err_empty_usr_pass',
                'method' => 'Login',
            ];
        }
        $user = Users::findOne(['username' => $username]);
        if (!$user) {
            return [
                'message' => 'errors.login.err_usr_nf',
                'method' => 'Login',
            ];
        }
        if (!Yii::$app->getSecurity()->validatePassword($password, $user->password)) {
            return [
                'message' => 'errors.login.err_inc_pass',
                'method' => 'Login',
            ];
        }
        if ($user->status === Users::STATUS_INACTIVE) {
            return [
                'message' => 'errors.login.err_need_act',
                'method' => 'Login',
            ];
        }
        if ($user->status === Users::STATUS_ACTIVE) {
            Yii::$app->response->statusCode = 200;
            Yii::$app->user->login($user);
            return [
                'message' => 'Success.',
                'method' => 'Login',
            ];
        }
        throw new UnhandledMatchError('Unhandled error.');
    }
    /**
     * @throws Exception
     * @throws \yii\base\Exception
     * @throws Throwable
     */
    public function actionSignUp(): Response
    {
        $language = Yii::$app->request->getBodyParam('language');
        $username = Yii::$app->request->getBodyParam('username');
        $email = Yii::$app->request->getBodyParam('email');
        $password = Yii::$app->getSecurity()->generatePasswordHash(Yii::$app->request->getBodyParam('password'));
        $token = trim(Yii::$app->security->generateRandomString(), '-');
        $user = Users::findOne(['email' => $email, 'username' => $username]);
        if ($user) {
            Yii::$app->response->statusCode = 400;
            if ($user->username === $username) {
                Yii::$app->response->data = [
                    'message' => 'errors.registration.err_alr_reg_with_usr',
                    'method' => 'Registration',
                ];
                return Yii::$app->response;
            }
            if ($user->email === $email) {
                Yii::$app->response->data = [
                    'message' => 'errors.registration.err_alr_reg_with_email',
                    'method' => 'Registration',
                ];
                return Yii::$app->response;
            }
            Yii::$app->response->data = [
                'message' => 'errors.registration.err_alr_reg',
                'method' => 'Registration',
            ];
            return Yii::$app->response;
        }
        $user = new Users;
        $user->email = $email;
        $user->username = $username;
        $user->password = $password;
        $user->activationToken = $token;
        $user->save();

        $mailSubject = 'Account activation';
        $mailBody = 'Please activate your account by clicking the following link: ';
        if ($language === 'ru') {
            $mailSubject = 'Активация аккаунта';
            $mailBody = 'Пожалуйста, активируйте свой аккаунт, перейдя по следующей ссылке: ';
        }

        Yii::$app->mailer->compose()
            ->setFrom(['super.gird2012@yandex.ru' => 'voorhu.com'])
            ->setTo($email)
            ->setSubject($mailSubject)
            ->setTextBody($mailBody . Yii::$app->urlManager->createAbsoluteUrl(['activation', 'token' => $token]))
            ->send();
        Yii::$app->response->data = [
            'message' => 'errors.registration.suc_chk_email',
            'method' => 'Registration',
        ];
        return Yii::$app->response;
    }
    /**
     * @throws InvalidRouteException
     */
    public function actionLogout(): Response
    {
        Yii::$app->user->logout();
        Yii::$app->response->redirect('/', 301)->send();
        return Yii::$app->response;
    }
    public function actionStatus(): Response
    {
        Yii::$app->response->data = [
            'status' => (bool) (Yii::$app->user->identity->status ?? 0),
            'method' => 'Status',
        ];
        return Yii::$app->response;
    }
    /**
     * @return Response
     * @throws Exception
     */
    public function actionActivation(): Response
    {
        Yii::$app->response->statusCode = 400;
        if (Yii::$app->user->identity->status === Users::STATUS_ACTIVE) {
            Yii::$app->response->data = [
                'message' => 'errors.activation.err_inv_usr_status',
                'method' => 'Activation',
            ];
            return Yii::$app->response;
        }
        $token = Yii::$app->request->getBodyParam('token');
        if (strlen($token) !== 32) {
            Yii::$app->response->data = [
                'message' => 'errors.activation.err_inv_act_token',
                'method' => 'Activation',
            ];
            return Yii::$app->response;
        }
        $user = Users::findOne(['activationToken' => $token]);
        if (!$user) {
            Yii::$app->response->data = [
                'message' => 'errors.activation.err_token_nf',
                'method' => 'Activation',
            ];
            return Yii::$app->response;
        }
        if ($user->status === Users::STATUS_ACTIVE) {
            Yii::$app->response->data = [
                'message' => 'errors.activation.err_alr_act',
                'method' => 'Activation',
            ];
            return Yii::$app->response;
        }
        $user->status = Users::STATUS_ACTIVE;
        $user->save();
        Yii::$app->user->login($user);
        Yii::$app->response->statusCode = 200;
        Yii::$app->response->data = [
            'status' => true,
            'message' => 'errors.activation.suc_usr_act',
            'method' => 'Activation',
        ];
        return Yii::$app->response;
    }
    /**
     * @throws InvalidConfigException
     * @throws \yii\httpclient\Exception
     * @throws InvalidRouteException
     * @throws Exception
     * @throws \yii\base\Exception
     * @throws Throwable
     */
    public function actionGetAccessTokenFromEpic(): Response
    {
        $code = Yii::$app->request->getBodyParam('code');
        $client = new Client();
        $request = $client->createRequest()
            ->setMethod('POST')
            ->setFormat(Client::FORMAT_URLENCODED)
            ->setUrl($_ENV['APP_EPIC_URL'])
            ->setHeaders(['Authorization' => $_ENV['APP_EPIC_AUTH']])
            ->setData([
                'grant_type' => 'authorization_code',
                'scope' => 'basic_profile',
                'code' => $code
            ])
            ->send();
        if ($request->isOk) {
            $account_id = $request->data['account_id'];
            $user = Users::findOne(['epicAccountId' => $account_id]);
            if (!$user) {
                $token = trim(Yii::$app->security->generateRandomString(), '-');
                $user = new Users;
                $user->email = $account_id;
                $user->username = $account_id;
                $user->password = $account_id;
                $user->activationToken = $token;
                $user->epicAccountId = $account_id;
                $user->epicActivationCode = $code;
                $user->save();
                Yii::$app->response->data = [
                    'message' => true,
                    'method' => 'EpicAuth',
                ];
                return Yii::$app->response;
            }
            Yii::$app->user->login($user);
            Yii::$app->response->statusCode = 200;
            return Yii::$app->response;
        }
        Yii::$app->response->statusCode = 400;
        Yii::$app->response->data = [
            'message' => 'errors.epicauth.err_inv_code',
            'method' => 'EpicAuth',
        ];
        return Yii::$app->response;
    }
    /**
     * @throws Throwable
     * @throws Exception
     * @throws StaleObjectException
     */
    public function actionSignUpFromEpic(): Response
    {
        $language = Yii::$app->request->getBodyParam('language');
        $email = Yii::$app->request->getBodyParam('email');
        $code = Yii::$app->request->getBodyParam('code');
        $user = Users::findOne(['email' => $email]);
        $epicUser = Users::findOne(['epicActivationCode' => $code]);
        Yii::$app->response->statusCode = 400;
        if ($user) {
            $epicUser?->delete();
            Yii::$app->response->data = [
                'message' => 'errors.epicauth.err_usr_alr_exs',
                'method' => 'EpicAuth',
            ];
            return Yii::$app->response;
        }
        if (!$epicUser) {
            Yii::$app->response->data = [
                'message' => 'errors.epicauth.err_code_del',
                'method' => 'EpicAuth',
            ];
            return Yii::$app->response;
        }
        $epicUser->email = $email;
        $epicUser->save();

        $mailSubject = 'Account activation';
        $mailBody = 'You have used the Epic Games registration form, in the future use the Epic Games button on the website login form to authorise yourself<br><br>Please activate your account by clicking the following link: ';
        if ($language === 'ru') {
            $mailSubject = 'Активация аккаунта';
            $mailBody = 'Вы использовали форму регистрации Epic Games, в будущем используйте кнопку Epic Games в форме входа на сайт для авторизации<br><br>Пожалуйста, активируйте свой аккаунт, перейдя по следующей ссылке: ';
        }

        Yii::$app->mailer->compose()
            ->setFrom(['super.gird2012@yandex.ru' => 'voorhu.com'])
            ->setTo($email)
            ->setSubject($mailSubject)
            ->setHtmlBody($mailBody . Yii::$app->urlManager->createAbsoluteUrl(['activation', 'token' => $epicUser->activationToken]))
            ->send();
        Yii::$app->response->statusCode = 200;
        Yii::$app->response->data = [
            'message' => 'errors.epicauth.suc_chk_email',
            'method' => 'EpicAuth',
        ];
        return Yii::$app->response;
    }
}
