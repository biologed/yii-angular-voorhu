<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidConfigException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\rest\Controller;
use yii\web\BadRequestHttpException;
use yii\web\Response;
use yii\web\ErrorAction;
use yii\filters\HttpCache;

class BoostyController extends Controller
{
    public function behaviors(): array
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'httpCache' => [
                'class' => HttpCache::class,
                'lastModified' => function ($action, $params) {
                    return time();
                },
                'cacheControlHeader' => 'public, max-age=86400',
            ],
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET', 'HEAD', 'OPTIONS'],
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
            ],
        ];
    }
    /**
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        if (!parent::beforeAction($action)) {
            return false;
        }
        return (YII_ENV_DEV) ? $_SERVER['HTTP_HOST'] === 'localhost:3009' : $_SERVER['HTTP_HOST'] === 'voorhu.com';
    }
    /**
     * @throws InvalidConfigException
     * @throws Exception
     */
    public function actionGetTotalMembers(): Response
    {
        $cache = Yii::$app->cache;
        $totalMembers = $cache->get('boosty-total-members');
        $timestamp = $cache->get('boosty-total-members-timestamp');
        if ($timestamp !== false && $totalMembers !== false && time() <= $timestamp + 86000) {
            Yii::$app->response->data = [
                'result' => $totalMembers,
                'timestamp' => $timestamp,
                'cached' => true
            ];
            return Yii::$app->response;
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
            Yii::$app->response->data = [
                'result' => $data['count']['subscribers'] ?? 0
            ];
            return Yii::$app->response;
        }
        Yii::$app->response->data =  [
            'result' => 0
        ];
        return Yii::$app->response;
    }
}
