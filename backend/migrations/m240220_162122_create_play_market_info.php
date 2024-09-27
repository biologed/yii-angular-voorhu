<?php

use yii\db\Migration;

/**
 * Class m240220_162122_create_play_market_info
 */
class m240220_162122_create_play_market_info extends Migration
{
    /**
     * {@inheritdoc}
     * @throws \yii\base\Exception
     */
    public function safeUp(): void
    {
        $tableOptions = null;
        $this->createTable('play_market_info', [
            'id' => $this->primaryKey(),
            'appId' => $this->string()->notNull(),
            'categoryName' => $this->string(),
            'authors' => $this->string(),
            'url' => $this->string(),
            'title' => $this->string(),
            'rating' => $this->decimal(),
            'reviews' => $this->integer(),
            'downloads' => $this->string()->notNull()->defaultValue(0),
            'json' => $this->json(),
            'createdAt' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updatedAt' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
        $this->createIndex(
            'idx-play-market-info-appid',
            'play_market_info',
            'appId'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240220_162122_create_play_market_info cannot be reverted.\n";
        $this->dropIndex(
            'idx-play-market-info-appid',
            'play_market_info'
        );
        $this->dropTable('play_market_info');
        return false;
    }
}
