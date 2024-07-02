<?php

namespace app\controllers;

use app\models\Adsstats;

use Yii;
use yii\db\DataReader;
use yii\db\Exception;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\ErrorAction;

class ApiController extends ActiveController
{
    public $modelClass = Adsstats::class;
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
     */
    public function actionNewPlay(): int
    {
        $request = Yii::$app->request;
        $appId = $request->getBodyParam('appId');
        $appType = $request->getBodyParam('identifier');

        if (!isset($appType, $appId)) {
            return 0;
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return Yii::$app->db->createCommand()->insert('statistics', [
            'appId' => $appId,
            'appType' => $appType
        ])->execute();
    }
    /**
     * @throws Exception
     */
    public function actionTotalCount(): DataReader|array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return Yii::$app->db->createCommand('SELECT SUM(sumTimesCalled) as sum FROM v_statistics')->queryAll();
    }
    /**
     * @throws Exception
     */
    public function actionAppList(): array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $list = Yii::$app->db->createCommand('SELECT * FROM v_statistics')->queryAll();
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
    public function actionRating(): array
    {
        $sort = strtoupper(Yii::$app->getRequest()->getQueryParam('sort')) ?? 'downloads';
        $order = (strtoupper(Yii::$app->getRequest()->getQueryParam('order')) === 'ASC') ? ' ASC' : ' DESC';
        Yii::$app->response->format = Response::FORMAT_JSON;
        $sql = 'SELECT appId, title, rating, reviews, downloads FROM play_market_info WHERE title <> "not_published" ORDER BY ';
        switch ($sort) {
            case 'downloads':
            case 'rating':
            case 'reviews':
            case 'title':
                $sql .=  $sort . $order;
        }
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
