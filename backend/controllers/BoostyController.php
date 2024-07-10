<?php

namespace app\controllers;

use app\models\Adsstats;

use Yii;
use yii\base\InvalidConfigException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\ErrorAction;

class BoostyController extends ActiveController
{
    public $modelClass = Adsstats::class;
    public function behaviors(): array
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::class,
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
            ],
        ];
    }
    /**
     * @throws InvalidConfigException
     * @throws Exception
     */
    public function actionGetTotalMembersCount(): Response
    {
        $response = Yii::$app->response;
        Yii::$app->response->format = Response::FORMAT_JSON;
        $cache = Yii::$app->cache;
        $totalMembers = $cache->get('boosty-total-members');
        $totalMembersTimestamp = $cache->get('boosty-total-members-timestamp');
        if (
            $totalMembersTimestamp !== false &&
            $totalMembers !== false &&
            time() <= $totalMembersTimestamp + 86000
        ) {
            $response->data = [
                'result' => $totalMembers,
                'timestamp' => $totalMembersTimestamp,
                'cached' => true
            ];
            return $response;
        }

        $client = new Client();
        $request = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('https://api.boosty.to/v1/blog/voorhu')
            ->send();
        if ($request->isOk) {
            $data = $request->data;
            $cache->set('boosty-total-members', $data['count']['subscribers'] ?? 0);
            $cache->set('boosty-total-members-timestamp', time());
            $response->data = [
                'result' => $data['count']['subscribers'] ?? 0
            ];
            return $response;
        }
        $response->data =  [
            'result' => 0
        ];
        return $response;
    }
}
