<?php

namespace app\models;

use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\web\Response;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "ads_stats".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $status
 * @property string $activateToken
 * @property string $authKey
 * @property string $licenseToken
 * @property string $createdAt
 * @property int $isDeleted
 */
class Users extends ActiveRecord implements IdentityInterface
{
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'ads_users';
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id): ?IdentityInterface
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null): ?IdentityInterface
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int current user ID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey(): string
    {
        return $this->authKey;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey): bool
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @throws Exception
     */
    public function beforeSave($insert): bool
    {
        if (parent::beforeSave($insert)) {
            if ($this->status === 1) {
                $this->authKey = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['username', 'email', 'password'], 'required'],
            ['email', 'unique', 'targetClass' => self::class],
            [['status', 'isDeleted'], 'integer'],
            [['createdAt'], 'safe'],
        ];
    }
}
