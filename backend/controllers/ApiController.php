<?php

namespace app\controllers;

use app\models\AdsStats;

use app\models\PlayMarketInfo;
use Throwable;
use Yii;
use yii\caching\CacheInterface;
use yii\db\Exception;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\Controller;
use yii\web\BadRequestHttpException;
use yii\web\Response;
use yii\web\ErrorAction;

class ApiController extends Controller
{
    private ?CacheInterface $cache;
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
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        if (!parent::beforeAction($action)) {
            return false;
        }
        $this->cache = Yii::$app->cache;
        Yii::$app->response->format = Response::FORMAT_JSON;
        return true;
    }
    /**
     * @throws Exception
     * @throws Throwable
     */
    public function actionNewPlay(): Response
    {
        $appId = Yii::$app->request->getBodyParam('appId');
        $appType = Yii::$app->request->getBodyParam('identifier');
        if (empty($appType) || empty($appId)) {
            Yii::$app->response->data = [
                'result' => 'error'
            ];
            return Yii::$app->response;
        }
        $adsstats = new AdsStats();
        $adsstats->appId = $appId;
        $adsstats->appType = $appType;
        $adsstats->save();
        Yii::$app->response->data = [
            'result' => 'success'
        ];
        return Yii::$app->response;
    }
    public function actionTotalCount(): Response
    {
        if ($this->getCacheValue('total-count')) {
            return Yii::$app->response;
        }
        $query = AdsStats::find()
            ->sum('sumTimesCalled');
        $this->setCacheValue('total-count', $query ?? 0);
        Yii::$app->response->data = [
            'result' => $query
        ];
        return Yii::$app->response;
    }
    public function actionAppList(): Response
    {
        if ($this->getCacheValue('app-list')) {
            return Yii::$app->response;
        }
        $query = AdsStats::find()
            ->select(['appId', 'appType', 'sumTimesCalled'])
            ->all();
        $list = [
            'prod' => [],
            'test' => []
        ];
        foreach ($query as $value) {
            if ($value['appType'] === 99) {
                $list['test'][$value['appType']][] = [
                    $value['appId'] => $value['sumTimesCalled']
                ];
            } else {
                $list['prod'][$value['appType']][] = [
                    $value['appId'] => $value['sumTimesCalled']
                ];
            }
        }
        $this->setCacheValue('app-list', $list ?? []);
        Yii::$app->response->data = [
            'result' => $list,
        ];
        return Yii::$app->response;
    }
    public function actionAppsRating(): Response
    {
        $order = strtolower(Yii::$app->request->getQueryParam('order') ?? 'title');
        $order = in_array($order, ['title', 'appId', 'rating', 'reviews', 'downloads']) ? $order : 'title';
        $sort = strtoupper(Yii::$app->request->getQueryParam('sort') ?? 'ASC') === 'ASC' ? SORT_ASC : SORT_DESC;

        if ($this->getCacheValue('apps-rating-' . $order . '-' . $sort)) {
            return Yii::$app->response;
        }
        $query = PlayMarketInfo::find()
            ->select(['title', 'appId', 'rating', 'reviews', 'downloads'])
            ->where(['not in', 'categoryName', [null]])
            ->orderBy([$order => $sort])
            ->all();
        $this->setCacheValue('apps-rating-' . $order . '-' . $sort, $query ?? []);
        Yii::$app->response->data = [
            'result' => $query,
            'order' => $order,
            'sort' => $sort,
        ];
        return Yii::$app->response;
    }
    private function getCacheValue(string $key): bool
    {
        $cacheValue = $this->cache->get($key);
        $timestamp = $this->cache->get($key . '-timestamp');
        if ($timestamp !== false && $cacheValue !== false && time() <= $timestamp + 86000) {
            Yii::$app->response->data = [
                'result' => $cacheValue,
                'timestamp' => $timestamp,
                'cached' => true
            ];
            Yii::$app->response;
            return true;
        }
        return false;
    }
    private function setCacheValue(string $key, mixed $value): void
    {
        $this->cache->set($key, $value);
        $this->cache->set($key . '-timestamp', time());
    }
}
