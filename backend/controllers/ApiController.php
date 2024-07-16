<?php

namespace app\controllers;

use app\models\Adsstats;

use Throwable;
use Yii;
use yii\db\DataReader;
use yii\db\Exception;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\Controller;
use yii\web\Response;
use yii\web\ErrorAction;

class ApiController extends Controller
{
    public $enableCsrfValidation = false;
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
     * @throws Exception
     * @throws Throwable
     */
    public function actionNewPlay(): int
    {
        $appId = Yii::$app->request->getBodyParam('appId');
        $appType = Yii::$app->request->getBodyParam('identifier');
        if (empty($appType) || empty($appId)) {
            return 0;
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        $adsstats = new Adsstats();
        $adsstats->appId = $appId;
        $adsstats->appType = $appType;
        $adsstats->save();
        return 1;
    }
    /**
     * @throws Exception
     */
    public function actionTotalCount(): DataReader|array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return Yii::$app->db->createCommand('SELECT SUM(sumTimesCalled) as sum FROM voorhu.vads_stats')->queryAll();
    }
    /**
     * @throws Exception
     */
    public function actionAppList(): array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $list = Yii::$app->db->createCommand('SELECT * FROM voorhu.vads_stats')->queryAll();
        $appList = [
            'prod' => [],
            'test' => []
        ];
        foreach ($list as $iValue) {
            if ($iValue['appType'] === '99') {
                $appList['test'][$iValue['appType']][] = [$iValue['appId'] => $iValue['sumTimesCalled']];
            } else {
                $appList['prod'][$iValue['appType']][] = [$iValue['appId'] => $iValue['sumTimesCalled']];
            }
        }
        return $appList;
    }
    /**
     * @throws Exception
     */
    public function actionAppsRating(): array
    {
        $order = Yii::$app->getRequest()->getQueryParam('order') ?? "title";
        $sort = Yii::$app->getRequest()->getQueryParam('sort') === 'ASC' ? 'ASC' : 'DESC';
        return Yii::$app->db->createCommand('SELECT appId, title, rating, reviews, downloads FROM voorhu.play_market_info WHERE title <> :title ORDER BY :order', [
            ':title' => 'not_published',
            ':order' => $order . $sort,
        ])->queryAll();
    }
}
