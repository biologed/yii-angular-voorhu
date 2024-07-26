<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\Response;

class PlayMarketInfo extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'play_market_info';
    }
    public function afterFind(): void
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
    public function rules(): array
    {
        return [
            [['id'], 'required'],
            [['reviews'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['appId'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'appId' => 'App ID',
            'categoryName' => 'Category Name',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
