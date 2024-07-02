<?php

namespace app\models;

use Yii;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\web\Response;

/**
 * This is the model class for table "ads_stats".
 *
 * @property int $id
 * @property string $appId
 * @property int $appType
 * @property int $timesCalled
 * @property string $createdAt
 * @property int $isDeleted
 */
class Adsstats extends ActiveRecord
{
    private string|int|null|false $firstCreatedAt;
    private string|int|null|false $lastCreatedAt;

    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'vads_stats';
    }

    /**
     * @throws InvalidConfigException
     */
    public function afterFind(): void
    {
        $this->firstCreatedAt = \Yii::$app->formatter->asDatetime($this->firstCreatedAt,'php:Y-m-d H:i');
        $this->lastCreatedAt = \Yii::$app->formatter->asDatetime($this->lastCreatedAt,'php:Y-m-d H:i');

        \Yii::$app->response->format = Response::FORMAT_JSON;
    }

    public function beforeValidate(): bool
    {
        $this->firstCreatedAt = strtotime($this->firstCreatedAt);
        $this->lastCreatedAt = strtotime($this->lastCreatedAt);

        return parent::beforeValidate();
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['appId'], 'required'],
            [['appType', 'timesCalled', 'isDeleted'], 'integer'],
            [['createdAt'], 'safe'],
            [['appId'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'appId' => 'App ID',
            'appType' => 'App Type',
            'timesCalled' => 'Times Called',
            'createdAt' => 'Created At',
            'isDeleted' => 'Is Deleted',
        ];
    }
}
