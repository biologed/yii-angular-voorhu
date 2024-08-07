<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\Response;

class AdsStats extends ActiveRecord
{
    /**
     * @var string|null
     */
    public ?string $appId;
    /**
     * @var int|null
     */
    public ?int $appType;
    public static function tableName(): string
    {
        return 'vads_stats';
    }
    public function afterFind(): void
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
    public function rules(): array
    {
        return [
            [['id'], 'required'],
            [['id', 'appType', 'sumTimesCalled'], 'integer'],
            [['firstCreatedAt', 'lastCreatedAt'], 'safe'],
            [['appId'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'appId' => 'App ID',
            'appType' => 'App Type',
            'sumTimesCalled' => 'Sum Times Called',
            'firstCreatedAt' => 'First Created At',
            'lastCreatedAt' => 'Last Created At'
        ];
    }
}
