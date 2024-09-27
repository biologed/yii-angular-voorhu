<?php

use yii\db\Migration;

/**
 * Class m240413_145911_ads_users
 */
class m240413_145911_ads_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $tableOptions = null;
        $this->createTable('ads_users', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'username' => $this->string(32)->notNull(),
            'password' => $this->string(60)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'createdAt' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'activationToken' => $this->string(32)->notNull(),
            'authKey' => $this->string(32),
            'epicAccountId' => $this->string(32),
            'epicActivationCode' => $this->string(32),
            'licenseToken' => $this->string(),
            'isDeleted' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);
        $this->createIndex(
            'idx_email_uniq',
            'ads_users',
            'email',
            true
        );
        $this->createIndex(
            'idx_username_uniq',
            'ads_users',
            'username',
            true
        );
        $this->createIndex(
            'idx_epic_account_id_uniq',
            'ads_users',
            'epicAccountId',
            true
        );
        $insert = [
            [
                'username' => 'kashak23',
                'status' => '1',
                'activationToken' => 'vk5NroFragwqtYE7dPfCXNTiQPXKZoy7',
                'authKey' => 'xMrY7uEa9X2GpdUo_pWdyJTAZCijuHvp',
                'createdAt' => '2024-5-6 19:00:33'
            ],
            [
                'username' => 'biologed',
                'status' => '1',
                'activationToken' => 'HhjLQ6EMlDvzyFlCHrcPfTD33IcdjfFh',
                'authKey' => 'kqnXX3P9ftBZUtdbxILeKrUvfTv9kW5L',
                'createdAt' => '2024-06-21 11:22:34'
            ],
        ];
        $this->batchInsert('ads_users', [
            'email',
            'username',
            'password',
            'status',
            'activationToken',
            'authKey',
            'createdAt',
        ], $insert);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240413_145911_ads_users cannot be reverted.\n";
        // drops foreign key for table `category`
        $this->dropIndex(
            'idx_email_uniq',
            'ads_users'
        );
        $this->dropIndex(
            'idx_username_uniq',
            'ads_users'
        );
        $this->dropIndex(
            'idx_epic_account_id_uniq',
            'ads_users'
        );
        $this->dropTable('ads_users');
        return false;
    }
}
