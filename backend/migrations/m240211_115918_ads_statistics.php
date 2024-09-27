<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m240211_115918_ads_statistics
 */
class m240211_115918_ads_statistics extends Migration
{
    /**
     * {@inheritdoc}
     * @throws \yii\db\Exception
     */
    public function safeUp(): void
    {
        $tableOptions = null;
        $this->createTable('ads_stats', [
            'id' => $this->primaryKey(),
            'appId' => $this->string()->notNull(),
            'appType' => $this->smallInteger()->notNull()->defaultValue(1),
            'timesCalled' => $this->smallInteger()->notNull()->defaultValue(1),
            'createdAt' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'isDeleted' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);
        $this->createIndex(
            'idx-ads-stats-appid',
            'ads_stats',
            'appId'
        );
        $insert = [
            [
                'appId' => 'com-YourCompany-Test001',
                'appType' => '1',
                'createdAt' => '2024-5-7 11:06:38'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-6 9:16:19'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-6 9:15:45'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-6 9:11:9'
            ],
            [
                'appId' => 'com-YourCompany-ADSCoreLite',
                'appType' => '99',
                'createdAt' => '2024-5-2 17:29:57'
            ],
            [
                'appId' => 'com-YourCompany-ADSCoreLite',
                'appType' => '99',
                'createdAt' => '2024-5-2 17:29:52'
            ],
            [
                'appId' => 'com-YourCompany-Test001',
                'appType' => '1',
                'createdAt' => '2024-5-2 15:29:51'
            ],
            [
                'appId' => 'com-YourCompany-Test001',
                'appType' => '1',
                'createdAt' => '2024-5-2 14:39:23'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-2 14:37:37'
            ],
            [
                'appId' => 'com-YourCompany-Test001',
                'appType' => '1',
                'createdAt' => '2024-5-2 14:23:40'
            ],
            [
                'appId' => 'com-YourCompany-Test001',
                'appType' => '1',
                'createdAt' => '2024-5-2 14:19:35'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-2 13:24:20'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:55:28'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:55:23'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:55:7'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-5-2 9:55:4'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:54:47'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:54:31'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:54:14'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '4',
                'createdAt' => '2024-5-2 9:53:37'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-5-2 9:53:11'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-5-2 9:52:57'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-5-2 9:46:52'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-2 9:30:22'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-2 8:49:42'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-4-27 1:23:46'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-4-27 1:23:36'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-4-27 0:56:29'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-4-26 23:32:8'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-4-26 23:31:53'
            ],
            [
                'appId' => 'com-YourCompany-MyProject2',
                'appType' => '99',
                'createdAt' => '2024-4-26 23:00:41'
            ],
            [
                'appId' => 'com-YourCompany-MyProject2',
                'appType' => '99',
                'createdAt' => '2024-4-26 23:00:40'
            ],
            [
                'appId' => 'com-YourCompany-MyProject2',
                'appType' => '99',
                'createdAt' => '2024-4-26 23:00:29'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 21:09:34'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 21:01:44'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:59:6'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:53:30'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:52:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:51:39'
            ],
            [
                'appId' => 'com-YourCompany-MyProject2',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:38:26'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:33:9'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:21:49'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:21:0'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:09:33'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:07:55'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:05:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:03:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:02:25'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:01:46'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 20:00:49'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:57:21'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:57:15'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:56:5'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:55:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:54:56'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:54:23'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:51:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:49:5'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:49:0'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:48:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:47:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 19:47:34'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-4-26 19:31:49'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:41:20'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:41:19'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:41:18'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:41:14'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:26:59'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:26:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:21:51'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:21:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:21:40'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:14:33'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:14:31'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:13:53'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:05:44'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 18:05:33'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:51:11'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:51:11'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:51:0'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:50:47'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:24:2'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-4-26 17:23:58'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 16:15:53'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 16:15:53'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 16:15:47'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-4-26 16:15:40'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-4-26 14:53:35'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-4-26 14:53:29'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-4-26 12:44:1'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-4-26 12:43:37'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-4-26 12:43:17'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-4-26 12:28:33'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-4-12 23:11:2'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-4-12 21:42:33'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-4-12 21:41:19'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-4-12 21:39:35'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-4-12 14:00:49'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-4-11 10:54:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 15:42:57'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 15:42:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 14:08:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 14:04:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 13:37:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:53:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:47:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:45:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:42:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:37:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 12:30:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 10:34:39'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:41:3'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:40:40'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:35:15'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:32:39'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:31:59'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:31:26'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-3-26 6:30:58'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-3-26 4:17:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-26 3:02:42'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-26 1:10:8'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-25 23:49:58'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-25 22:49:21'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-25 19:33:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-25 17:11:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-25 16:52:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-25 13:35:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-25 10:44:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 23:27:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 16:22:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 16:02:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 15:59:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 13:24:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-24 8:09:23'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-23 23:09:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 15:47:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 9:57:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 7:44:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 4:34:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 1:30:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 1:19:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-23 1:16:7'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-23 0:00:12'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:59:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:59:44'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:59:23'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:59:9'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:58:55'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:58:42'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:58:4'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:57:42'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:57:20'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:57:12'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-22 23:57:1'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-22 22:38:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 18:42:24'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 18:35:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 14:39:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 14:32:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 13:38:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 13:36:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 13:33:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 12:05:0'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:45'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:35'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:30'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:24'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:13'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:24:8'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:23:59'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:23:53'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:23:49'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:23:39'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:23:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 10:09:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 4:45:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-22 1:39:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 21:03:4'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 21:02:33'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 20:12:44'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:36'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:30'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:24'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:18'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:10'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 17:00:4'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:59:59'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:59:52'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:59:41'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:59:31'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:58:1'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:33:18'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:33:12'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:33:4'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:57'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:46'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:40'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:31'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:25'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:19'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:11'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:32:2'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 16:31:46'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 15:35:2'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 15:34:56'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 15:34:39'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 15:33:57'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '1',
                'createdAt' => '2024-3-21 15:33:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 10:29:40'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:54:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:37:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:33:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:30:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:26:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-21 9:23:32'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-21 3:07:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 21:31:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 20:59:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 20:49:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 20:46:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 20:43:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 20:40:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 18:55:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 15:42:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 15:39:0'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-20 15:24:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 14:07:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 13:20:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 13:17:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 13:14:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 12:08:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 12:05:11'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-3-20 10:18:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 9:47:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 8:22:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 8:19:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 1:45:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 1:42:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 1:39:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 1:36:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-20 0:36:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 22:31:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 22:28:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 22:25:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 21:07:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 10:03:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-19 10:00:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-18 22:40:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-18 21:24:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-18 19:36:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-18 17:21:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-18 11:57:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 23:43:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 19:45:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 19:42:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 18:57:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 18:32:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 15:30:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 15:27:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 15:18:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 15:08:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 15:05:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 14:58:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 14:56:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 14:55:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 14:25:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 12:40:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 12:34:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 12:30:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 12:26:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 12:23:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 10:48:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 10:38:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 10:24:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 9:39:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 9:27:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 9:24:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 3:55:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 3:52:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 3:49:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-17 3:46:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 23:39:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 23:35:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 23:15:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 23:12:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 23:07:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:51:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:51:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:51:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:48:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:45:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 19:09:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 18:25:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 18:08:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 17:08:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 17:03:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 16:48:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 16:19:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 16:15:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 16:12:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 14:58:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 14:54:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 11:41:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 11:31:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 10:47:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 10:39:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 9:18:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 9:14:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 9:11:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 8:56:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 8:50:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-16 8:02:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 23:27:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 21:12:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:53:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:50:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:47:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:43:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:40:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:36:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:29:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:26:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 20:23:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 19:46:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:55:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:19:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:14:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:10:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:06:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:06:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 18:03:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:59:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:55:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:53:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:52:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:13:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 17:09:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 15:15:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 14:27:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 13:17:41'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-15 11:39:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 10:26:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 7:03:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 5:35:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 5:35:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 5:35:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-15 2:36:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 20:39:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 20:35:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 20:32:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 20:29:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 19:16:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 9:49:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 9:45:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 9:08:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 6:11:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 1:10:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 1:09:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 1:06:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 0:13:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-14 0:12:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 20:42:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 20:20:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 20:15:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:42:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:23:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:19:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:15:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:09:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 19:02:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 18:59:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 15:15:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 12:37:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 12:34:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 12:31:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 11:47:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-13 11:47:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 20:35:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 19:04:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 17:47:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 17:14:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 4:00:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 3:56:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 1:19:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 1:16:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 1:13:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-12 1:09:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 21:06:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 21:03:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 18:24:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 17:15:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 14:03:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 13:07:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 13:03:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 12:59:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 8:36:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 8:25:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 8:22:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 8:01:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 7:44:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 5:35:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 2:27:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 1:15:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 1:12:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 1:09:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 0:22:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 0:18:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-11 0:15:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 23:09:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 23:06:34'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:59'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:53'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:43'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:39'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:35'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-10 21:59:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 21:52:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 21:48:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 19:55:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 18:35:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 17:51:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 16:23:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 16:23:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 16:15:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 14:25:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 14:25:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 14:21:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 14:18:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 14:15:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 13:31:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 13:25:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 12:52:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 12:49:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 12:20:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 10:16:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 10:12:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 10:08:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 10:05:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 10:01:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:57:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:23:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:20:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:17:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:13:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:10:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 9:03:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 8:59:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 8:56:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 7:33:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 7:30:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 7:26:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 7:23:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 6:43:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 6:42:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 4:50:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 4:47:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 4:26:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 4:24:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 4:07:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-10 2:54:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 21:53:26'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-9 21:43:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 17:31:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 17:02:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 13:52:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 13:50:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 10:37:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 10:32:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 9:52:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 9:49:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 9:46:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 9:45:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 9:41:50'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-9 8:37:5'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-9 8:34:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-9 8:31:52'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-9 8:27:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 7:40:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 7:37:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 7:37:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 7:34:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 7:31:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-9 1:27:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-9 0:57:15'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-9 0:57:12'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-9 0:57:7'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-3-9 0:49:52'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 22:53:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 22:53:11'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 22:53:10'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 22:53:8'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:39'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:37'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:36'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 21:36:35'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:33:47'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:32:46'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:31:46'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:30:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:29:40'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-8 20:28:52'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:28:38'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '4',
                'createdAt' => '2024-3-8 20:28:32'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:27:37'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '6',
                'createdAt' => '2024-3-8 20:27:36'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:18:31'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-8 20:18:30'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 20:17:32'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:11:14'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:11:5'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:09:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:09:41'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:09:41'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:07:10'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:07:2'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:06:49'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-3-8 20:06:49'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:40:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:39:42'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:45'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:44'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:41'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:41'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-3-8 19:37:14'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:35:44'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:33:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:32:42'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-8 19:31:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:28:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:27:54'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:26:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:25:51'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:24:50'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-8 19:23:48'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:12:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '1',
                'createdAt' => '2024-3-8 19:11:42'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-8 19:11:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 16:51:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 16:48:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 16:19:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 16:16:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 16:13:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 14:56:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 14:53:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 8:59:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 8:56:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 8:53:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 8:50:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-8 3:46:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 21:01:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 20:58:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 20:36:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 20:29:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 18:06:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 16:47:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 16:44:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 15:44:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 15:29:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 13:05:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 10:33:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 6:34:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 6:29:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-7 6:27:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 23:38:11'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:33:50'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:32:12'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:30:36'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:26:27'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:24:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 22:24:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 20:11:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 20:08:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 18:47:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 16:23:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 16:10:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 15:13:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 14:56:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 13:14:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 13:11:43'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-6 12:13:58'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-6 12:11:55'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-6 12:10:14'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-6 12:09:3'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '3',
                'createdAt' => '2024-3-6 12:07:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 10:59:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 9:15:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 9:11:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 7:04:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 5:49:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-6 4:21:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 20:56:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 20:31:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 20:28:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 20:03:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 20:00:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:57:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:53:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:50:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:47:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:43:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 19:40:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:50:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:47:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:42:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:40:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:37:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 18:08:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 17:46:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 16:31:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 16:08:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 15:58:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 15:55:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 15:51:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 15:22:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:23:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:15:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:10:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:09:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:06:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:06:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 14:03:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 13:22:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 13:04:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 13:01:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:56:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:50:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:47:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:42:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:38:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 12:35:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 11:21:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 11:18:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 11:12:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 10:33:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 9:29:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 9:26:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 9:23:25'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-5 7:31:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 7:00:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 6:18:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 6:12:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 2:51:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 2:48:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-5 2:45:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-4 20:21:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-4 15:38:3'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-4 12:11:54'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-3-4 12:11:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 23:44:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 23:41:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:35:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:21:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:17:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:12:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:11:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:08:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:03:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 21:00:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 20:30:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 20:27:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 20:24:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 20:17:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 19:11:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 19:07:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 19:04:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 19:00:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:56:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:53:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:44:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:41:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:05:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 18:02:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:59:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:55:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:51:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:46:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:42:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 17:10:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 16:45:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 16:42:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 16:11:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 16:07:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 15:58:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 15:49:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 13:42:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 13:39:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 13:35:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 12:54:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 9:56:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 4:50:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 4:50:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 4:29:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 4:09:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-3 3:23:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 22:42:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 22:17:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 22:13:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 22:10:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 22:07:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 21:44:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 21:14:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 20:03:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 20:00:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 18:33:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 18:30:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 18:12:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 18:09:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 17:50:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 17:42:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 17:40:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 17:16:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 16:15:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 15:56:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 15:52:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 15:49:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 15:08:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 13:08:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 11:53:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 11:50:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 11:36:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 11:20:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 10:26:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 10:01:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 9:58:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 9:54:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 9:39:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 9:36:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 9:31:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 7:37:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 6:17:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 6:01:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 5:32:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 5:28:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 3:12:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-2 1:15:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 23:00:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:56:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:46:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:43:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:40:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:36:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:29:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 22:24:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 20:34:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 20:31:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 20:28:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 20:22:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:52:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:45:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:42:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:40:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:39:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:39:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:32:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:27:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:24:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:21:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:04:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 19:04:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 18:22:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 17:54:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 16:02:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 14:47:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 14:09:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 13:19:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 10:49:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:56:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:50:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:47:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:18:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:13:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 9:10:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 8:06:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 3:15:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 3:12:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 2:17:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 2:12:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 2:09:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 1:52:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 1:49:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 1:37:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 1:34:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-3-1 1:25:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 22:24:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 22:21:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 22:18:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 22:14:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 22:11:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 19:46:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 19:46:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 19:46:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 18:52:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 14:29:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 14:26:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 14:23:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 13:54:48'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-29 11:26:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 7:10:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 7:04:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 7:00:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 6:57:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 6:54:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 6:51:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 6:48:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 6:41:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-29 0:20:7'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-28 23:45:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 23:28:5'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-28 23:04:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 22:56:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 22:53:1'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-28 22:31:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 16:19:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 9:25:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-28 4:03:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 18:19:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 18:06:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 17:33:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 17:29:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 16:25:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 16:22:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 15:35:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-27 10:56:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 18:18:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 18:15:31'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 17:23:5'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 17:22:48'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 17:22:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 14:28:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 13:56:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 13:05:20'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 11:25:44'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 11:25:37'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 11:25:28'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:53:51'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:53:40'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:53:31'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:14:36'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:14:36'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:14:36'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 9:14:36'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 3:08:55'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 3:07:49'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 3:06:51'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 2:59:45'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 2:05:27'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 2:05:25'
            ],
            [
                'appId' => 'com-YourCompany-ADS_CORM_PRO',
                'appType' => '99',
                'createdAt' => '2024-2-26 2:01:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-26 0:15:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 22:47:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 22:47:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 21:19:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 19:20:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 19:17:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 19:14:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 18:43:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 16:53:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 16:49:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 15:12:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 15:09:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 15:05:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 14:27:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 14:18:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 12:06:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 12:06:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:51:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:24:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:21:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:19:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:18:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 11:16:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 9:22:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 8:55:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 8:55:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 8:44:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 8:40:44'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-25 7:41:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 6:02:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 5:59:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 5:56:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-25 5:52:58'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-24 21:48:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 21:46:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:55:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:55:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:50:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:21:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:18:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 20:16:4'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-24 19:41:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 19:39:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 19:35:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 18:14:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 17:11:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 17:08:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 17:06:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 16:41:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 16:06:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:47:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:45:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:41:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:38:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:34:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:29:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:26:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:14:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:14:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:14:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:10:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:07:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:04:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 15:00:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 14:53:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 14:38:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 14:34:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:20:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:17:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:13:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:10:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:07:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:03:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 13:00:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 12:56:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 12:53:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 10:42:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 9:42:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 4:25:28'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-24 0:26:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 0:25:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-24 0:22:13'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-24 0:04:23'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-24 0:03:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 23:44:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 23:37:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 22:56:14'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-23 21:58:12'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-23 21:44:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 21:06:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 20:49:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 19:38:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 19:35:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 19:32:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 18:48:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 17:11:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 17:08:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 16:21:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 16:17:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 14:22:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 12:07:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 11:09:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 8:20:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 8:08:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 8:05:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 7:43:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:52:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:49:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:45:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:20:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:17:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 4:14:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 3:58:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 3:27:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 3:23:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 1:27:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-23 0:23:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:47:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:43:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:37:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:13:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:13:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:11:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:10:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:10:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:09:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:07:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 22:06:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 20:43:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 20:40:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 20:37:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 20:31:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 19:20:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 19:16:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 19:13:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 19:09:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 18:17:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 18:14:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 18:00:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 17:48:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 17:45:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:56:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:50:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:22:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:08:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:08:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 15:05:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 13:58:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 1:50:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-22 1:20:24'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-21 22:36:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 21:52:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 21:49:39'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:19:29'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:19:29'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:18:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:18:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:18:30'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:18:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:17:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:17:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:17:29'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:17:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:16:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:16:30'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:16:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:16:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:15:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:15:30'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:15:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:15:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:14:30'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:14:29'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:14:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:14:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:13:29'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:13:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:13:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:13:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:13:19'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:12:17'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:11:16'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:10:18'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:09:15'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:08:15'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:07:17'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:06:14'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:05:13'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:04:13'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:03:14'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:03:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:02:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:01:13'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 20:00:11'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:59:10'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:58:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:57:10'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:56:9'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:43'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:23'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:15'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:12'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:55:11'
            ],
            [
                'appId' => 'com-example-adv_test',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:46:25'
            ],
            [
                'appId' => 'com-example-adv_test',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:46:22'
            ],
            [
                'appId' => 'com-example-adv_test',
                'appType' => '99',
                'createdAt' => '2024-2-21 19:43:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:23:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:21:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:18:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:17:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:14:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 19:11:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:56:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:51:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:48:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:34:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:27:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:20:59'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:20:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:20:23'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:20:21'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:20:21'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:20:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 18:17:38'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:13:37'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:13:33'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:13:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:13:27'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 18:13:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:47:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 17:44:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 17:37:49'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:09:25'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:04:5'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:04:3'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:04:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:04:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:03:4'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:03:3'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:03:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:03:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:02:4'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:02:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:02:2'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:02:1'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:34'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:33'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:33'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:31'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 17:00:28'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 16:59:35'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 16:59:33'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 16:56:37'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 16:56:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-21 16:55:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 13:49:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 13:31:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 13:28:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 13:25:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 13:22:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 12:32:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 12:29:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:58:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:55:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:51:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:48:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:45:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:42:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 11:39:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 8:27:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 7:56:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 6:47:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 5:48:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-21 5:45:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 21:38:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 21:38:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 20:18:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:55:22'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:47:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:44:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:44:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:40:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:36:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 19:33:26'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:26:50'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:26:8'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:25:39'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:23:59'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:09:32'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:09:3'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:08:57'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:08:55'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:06:24'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:06:5'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:06:3'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 19:05:53'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 18:49:59'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 18:49:39'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 18:43:40'
            ],
            [
                'appId' => 'com-adscore-pro',
                'appType' => '99',
                'createdAt' => '2024-2-20 18:38:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 18:07:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 17:47:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:53:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:48:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:45:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:42:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:33:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:25:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:22:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:22:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 15:15:17'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-20 9:11:40'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-20 8:02:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 7:42:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 5:21:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 5:02:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 4:58:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-20 4:14:36'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-20 0:16:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 23:31:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 23:28:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 19:47:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 19:24:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:43:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:40:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:15:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:12:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:11:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:08:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:05:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 18:01:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 16:49:20'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-19 16:42:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 15:46:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 15:42:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 15:39:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 15:00:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 11:35:12'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-19 6:17:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:53:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:50:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:47:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:44:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:40:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:37:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:34:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 5:26:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:57:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:48:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:45:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:41:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:34:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 2:31:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:42:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:39:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:18:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:15:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:12:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:09:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:04:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 1:00:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:51:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:47:41'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:47:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:43:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:41:43'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:40:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:37:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:36:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:33:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:29:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:23:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-19 0:04:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 23:53:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 23:47:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 20:19:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 20:16:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 18:22:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 18:19:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 18:16:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 18:13:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 17:57:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 17:51:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 15:18:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 13:56:30'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 13:33:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 13:30:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 12:11:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 12:08:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 12:08:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 11:46:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 11:43:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 11:21:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 11:17:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 11:14:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:57:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:56:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:54:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:52:55'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:51:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:48:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:47:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:44:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:44:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:41:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 10:41:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 9:08:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 9:06:3'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-18 0:54:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 20:01:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 19:58:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 19:55:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 19:52:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 19:23:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:52:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:38:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:35:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:32:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:28:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:22:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:16:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 18:02:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 17:44:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 17:37:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 16:15:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 16:09:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 15:38:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 15:32:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 15:25:37'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 15:11:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 14:21:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 13:39:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 13:36:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 13:35:30'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-2-17 8:43:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 7:07:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 6:08:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-17 2:46:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 20:16:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 20:13:18'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 16:43:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 16:38:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 15:15:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 14:34:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 13:03:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 13:00:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 12:56:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 11:57:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 9:05:50'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 2:53:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 2:02:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 1:59:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-16 1:56:0'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-15 22:06:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:57:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:15:47'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:12:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:09:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:06:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:03:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 19:00:19'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 18:57:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 18:54:7'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 18:01:54'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 17:46:57'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 17:21:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 16:52:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 16:30:28'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 15:47:6'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 14:44:59'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 14:41:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 14:02:12'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 14:02:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 13:58:32'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 13:54:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 13:50:48'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 13:47:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 12:02:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 10:55:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 10:52:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-15 0:09:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 23:52:35'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 22:37:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 22:33:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 21:39:27'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 21:36:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 21:18:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 16:00:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 15:02:23'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-14 13:25:24'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-14 12:54:5'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 12:34:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 10:56:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 9:14:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-14 1:43:42'
            ],
            [
                'appId' => 'ama.the.king.com',
                'appType' => '99',
                'createdAt' => '2024-2-14 1:11:40'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 23:56:38'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 22:57:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 20:45:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 20:12:36'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 19:47:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 17:39:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 17:39:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 17:39:8'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 17:09:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 16:20:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 10:18:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 9:51:51'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 9:48:42'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 9:03:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-13 5:13:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 23:42:39'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 20:20:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 19:35:11'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 19:07:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 18:08:10'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 17:41:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 17:09:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 17:06:13'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 11:19:58'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 10:33:1'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 8:25:56'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 6:00:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-12 5:57:23'
            ],
            [
                'appId' => 'ama.the.king.com',
                'appType' => '99',
                'createdAt' => '2024-2-12 4:21:36'
            ],
            [
                'appId' => 'ama.the.king.com',
                'appType' => '99',
                'createdAt' => '2024-2-12 4:21:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 20:17:21'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 20:13:53'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 20:10:17'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 17:04:31'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 16:57:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 16:04:44'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 14:27:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 14:19:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 13:27:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 12:35:49'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 12:32:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 12:10:14'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 12:07:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 10:25:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 10:22:20'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 10:19:15'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-11 7:02:59'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 22:14:56'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 22:14:51'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 19:16:33'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 18:56:29'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-10 18:27:38'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-10 13:53:56'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 12:37:53'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 12:37:46'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-10 11:28:2'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-10 7:52:15'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-2-10 7:36:32'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-10 1:06:52'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 23:36:12'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 23:32:26'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 21:21:52'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 21:18:39'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 15:29:44'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 15:28:19'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 15:26:0'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 14:18:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 14:15:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 14:08:45'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 14:05:31'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 14:00:57'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 12:38:34'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 12:18:26'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-9 9:32:12'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-2-9 1:55:16'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-9 1:44:33'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-8 19:37:4'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-8 15:09:46'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 13:03:11'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 13:02:5'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 13:00:35'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 12:59:6'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 12:51:55'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 12:50:59'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 12:50:42'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-8 12:50:9'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-8 10:28:25'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-2-8 10:25:6'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:58:58'
            ],
            [
                'appId' => 'com-vFredov-PYATERKAFIGHT',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:10:24'
            ],
            [
                'appId' => 'com-vFredov-PYATERKAFIGHT',
                'appType' => '1',
                'createdAt' => '2024-2-2 21:10:24'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-gamestudiokg-spider',
                'appType' => '1',
                'createdAt' => '2024-1-31 15:55:23'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '1',
                'createdAt' => '2024-1-30 6:39:6'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '99',
                'createdAt' => '2024-1-30 1:50:42'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '99',
                'createdAt' => '2024-1-30 1:50:42'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '99',
                'createdAt' => '2024-1-30 1:50:42'
            ],
            [
                'appId' => 'com-dude-vibor',
                'appType' => '99',
                'createdAt' => '2024-1-30 1:50:42'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-YoungPlayersClub-EndllesNight',
                'appType' => '99',
                'createdAt' => '2024-1-29 11:14:54'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-horizonhavengames-starstream',
                'appType' => '2',
                'createdAt' => '2024-1-27 16:10:38'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-1-18 23:38:41'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-YourCompany-CalRTX',
                'appType' => '99',
                'createdAt' => '2024-1-18 15:50:36'
            ],
            [
                'appId' => 'com-VOIDROSE-DefaultRunner',
                'appType' => '99',
                'createdAt' => '2024-1-14 22:48:41'
            ],
            [
                'appId' => 'com-YourCompany-ADSCoreLite',
                'appType' => '99',
                'createdAt' => '2024-1-14 22:27:36'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-example-nativecpptest',
                'appType' => '99',
                'createdAt' => '2024-1-14 19:25:2'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '99',
                'createdAt' => '2024-5-14 15:19:38'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '99',
                'createdAt' => '2024-5-14 15:21:23'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '99',
                'createdAt' => '2024-5-14 15:23:26'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '99',
                'createdAt' => '2024-5-14 19:25:51'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '99',
                'createdAt' => '2024-5-14 19:29:12'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 16:47:59'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 16:50:16'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 20:15:4'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 22:18:30'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 22:20:19'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 22:21:56'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 22:23:36'
            ],
            [
                'appId' => 'com-BIT_K-Roamed',
                'appType' => '1',
                'createdAt' => '2024-5-16 22:27:27'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-18 12:17:49'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:55:38'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:55:48'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:55:58'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:56:15'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:56:27'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:57:37'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 21:57:46'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:42:9'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:42:25'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:42:48'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:43:28'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:43:35'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-20 22:43:45'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 8:48:35'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 8:49:13'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 9:54:21'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 9:55:11'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 9:56:36'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 9:56:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 10:45:36'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 12:40:2'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 14:40:50'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 14:54:21'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 15:03:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 15:03:58'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 15:04:5'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 15:04:20'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 15:05:26'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 20:43:50'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 20:50:17'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-21 23:26:43'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 9:40:21'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 9:40:34'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 14:24:34'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 14:25:57'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 18:14:20'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 23:37:2'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 23:42:37'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-22 23:47:39'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 8:05:31'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 8:05:54'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 8:29:33'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 8:30:39'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 11:30:28'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 11:32:10'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 11:32:39'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 11:46:57'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 12:07:9'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 12:11:33'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 12:40:57'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 13:01:26'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-23 13:02:1'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 18:10:3'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 22:54:55'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-23 22:57:23'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-24 9:36:37'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 9:51:41'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 10:28:39'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 10:44:47'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 10:45:4'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 11:41:14'
            ],
            [
                'appId' => 'com-YourCompany-test001',
                'appType' => '1',
                'createdAt' => '2024-5-24 12:17:22'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 12:40:22'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-24 12:50:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-24 23:09:38'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-24 23:10:14'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-24 23:10:28'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-24 23:11:46'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-25 10:24:5'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-25 12:49:54'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-5-25 12:52:39'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-25 17:25:4'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-26 9:21:15'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-26 9:21:23'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-26 16:36:41'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-26 16:36:58'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-27 22:20:33'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-27 22:21:9'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 9:48:31'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 9:49:14'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 9:49:25'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 14:11:17'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 14:12:42'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-28 14:12:59'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-28 17:11:43'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-28 17:14:10'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-28 19:09:54'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-28 19:10:52'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-29 12:26:59'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-29 12:27:25'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-30 10:23:43'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-30 10:24:23'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-30 12:17:11'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 18:09:54'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 18:25:17'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 18:27:22'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 23:03:53'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 23:05:44'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-5-30 23:39:1'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 20:48:41'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 20:49:48'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 20:53:6'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 21:51:29'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 21:53:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 21:55:40'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 21:56:55'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 21:57:48'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 22:01:10'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 22:24:52'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 22:25:59'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-5-31 22:26:12'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-1 12:54:24'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-1 13:00:37'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-1 22:51:34'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-1 22:51:54'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-1 23:38:33'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-2 22:43:3'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-2 22:43:24'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-3 12:50:0'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-3 12:50:24'
            ],
            [
                'appId' => 'com-StanislavM-Bomber',
                'appType' => '1',
                'createdAt' => '2024-6-4 11:12:25'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:49:21'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:49:34'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:50:48'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:52:3'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:52:10'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:53:28'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-4 22:54:29'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 10:52:30'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 10:52:38'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:41:17'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:41:38'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:44:33'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:44:40'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:44:47'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:44:55'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 20:45:1'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-5 22:19:27'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 22:55:19'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 22:56:25'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 22:56:35'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 23:19:23'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-5 23:46:41'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 0:09:29'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 0:45:20'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 1:32:34'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 1:32:56'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 1:33:17'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 1:34:28'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 2:11:29'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 9:17:57'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 9:18:13'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 9:18:37'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 9:52:22'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-6 9:52:45'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 10:08:32'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 10:23:23'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 10:23:34'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 13:23:27'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 18:43:19'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 18:43:28'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 18:49:43'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 18:49:53'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:02:28'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:02:43'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:02:54'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:04:55'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:06:28'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:06:43'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:08:18'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:10:19'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:10:32'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:10:58'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:12:43'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:12:57'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:15:22'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:16:32'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:16:40'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:16:50'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:18:44'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:18:53'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:19:18'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:21:18'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:23:3'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:24:58'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:25:7'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:27:19'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:27:30'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:29:44'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:32:20'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:48:9'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:48:16'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:56:14'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 19:56:45'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-6 23:05:43'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:10:31'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:10:48'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:11:54'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:12:3'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:12:10'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:12:20'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:12:28'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:12:37'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:13:50'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:14:0'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:14:9'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:16'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:26'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:34'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:41'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:49'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:15:57'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:16:10'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-7 13:16:17'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-8 9:40:8'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-8 20:58:45'
            ],
            [
                'appId' => 'com-UnderBeerGames-UD04KA',
                'appType' => '99',
                'createdAt' => '2024-6-9 10:40:2'
            ],
            [
                'appId' => 'com-UnderBeerGames-UD04KA',
                'appType' => '99',
                'createdAt' => '2024-6-9 10:40:12'
            ],
            [
                'appId' => 'com-UnderBeerGames-UD04KA',
                'appType' => '99',
                'createdAt' => '2024-6-9 10:40:21'
            ],
            [
                'appId' => 'com-UnderBeerGames-UD04KA',
                'appType' => '99',
                'createdAt' => '2024-6-9 10:40:28'
            ],
            [
                'appId' => 'com-UnderBeerGames-UD04KA',
                'appType' => '99',
                'createdAt' => '2024-6-9 10:41:24'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-9 13:07:9'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-10 9:38:11'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-10 9:38:30'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-10 9:39:0'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-10 9:39:13'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:32:19'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:34:15'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:34:53'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:36:27'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:53:33'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:53:52'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:54:12'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-10 21:57:30'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 22:33:51'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 22:35:44'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 22:36:6'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 22:37:37'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 22:38:4'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 23:10:55'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 23:11:10'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 23:12:38'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 23:12:54'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-10 23:36:11'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:01:48'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:03:27'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:52:48'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:53:23'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:53:42'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:53:57'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-11 10:54:9'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-11 15:15:16'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-11 15:17:29'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-11 15:18:38'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:02:56'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:03:6'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:03:29'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:03:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:04:13'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-12 14:04:31'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-12 15:27:51'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:30:35'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:30:52'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:31:15'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:33:1'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:33:16'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:33:43'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:34:29'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-13 11:34:43'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-14 13:26:51'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-14 13:27:10'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-14 13:27:29'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-14 13:27:53'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-14 13:28:9'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:20:51'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:21:5'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:21:25'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:22:7'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:23:2'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-15 22:23:11'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:44:10'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:44:23'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:44:44'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:45:1'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:46:43'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-17 16:47:4'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-19 15:30:11'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-19 15:32:40'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-19 15:35:19'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-19 15:37:26'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-19 19:31:56'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-19 19:33:36'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-19 19:34:47'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-19 19:35:47'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-20 10:53:33'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-20 10:55:39'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-20 10:58:9'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-20 11:46:21'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-20 11:46:49'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-20 11:47:4'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-20 11:47:20'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-20 11:47:34'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-22 19:17:10'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-22 21:41:23'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-23 18:30:36'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:11:40'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:12:3'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:12:45'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:12:55'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:13:17'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-23 23:13:44'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-25 2:26:25'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-25 2:27:36'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-25 2:28:6'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-26 10:16:47'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-26 10:17:21'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-26 10:17:28'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-26 10:17:47'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-26 18:19:38'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '99',
                'createdAt' => '2024-6-27 9:41:32'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '99',
                'createdAt' => '2024-6-27 9:41:50'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-27 12:16:41'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-27 12:16:54'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-27 12:19:21'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-27 12:19:36'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-27 12:20:6'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:5:26'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:5:37'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:5:57'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:6:19'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:6:43'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-28 8:7:27'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 11:50:20'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:13:45'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:14:5'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:15:31'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:15:52'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:17:48'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:20:5'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:20:20'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-6-28 12:21:1'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-29 23:11:27'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-29 23:14:1'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:28:52'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:30:42'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:32:14'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:40:20'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:42:11'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:43:48'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:44:58'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:49:6'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:50:46'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:52:3'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:53:2'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:54:16'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:55:10'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:56:8'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:57:11'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:57:59'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:59:13'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-29 23:59:32'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:0:30'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:6:17'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:8:2'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:9:24'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:10:54'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:12:26'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 0:13:42'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:24:35'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:26:38'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:28:10'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:29:36'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:30:41'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:31:37'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:32:20'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 13:33:46'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:11:2'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:11:15'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:11:37'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:11:56'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:12:19'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-6-30 20:12:31'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 23:18:31'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 23:21:51'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 23:23:48'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 23:24:17'
            ],
            [
                'appId' => 'com-hardworkers-cyberball2120',
                'appType' => '2',
                'createdAt' => '2024-6-30 23:26:14'
            ],
            [
                'appId' => 'com-fazenda-Seabattle',
                'appType' => '1',
                'createdAt' => '2024-7-1 11:11:46'
            ],
            [
                'appId' => 'com-teamexe-xBallz',
                'appType' => '1',
                'createdAt' => '2024-7-2 4:33:59'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-7-2 11:19:13'
            ],
            [
                'appId' => 'com-fazenda-game15puzzleCatsDogs',
                'appType' => '1',
                'createdAt' => '2024-7-2 11:19:30'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-7-2 11:19:51'
            ],
            [
                'appId' => 'com-fazenda-Game15Puzzle',
                'appType' => '1',
                'createdAt' => '2024-7-2 11:20:24'
            ],
            [
                'appId' => 'com-YourCompany-YandexBlue',
                'appType' => '99',
                'createdAt' => '2024-7-2 17:33:7'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 18:37:47'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:41:10'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:41:18'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:41:31'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:42:6'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:42:19'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:42:59'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:44:40'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:46:13'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:46:49'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:47:39'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:48:4'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-2 20:51:54'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:51:20'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:51:44'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:51:58'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:5'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:13'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:20'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:31'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:41'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:52:46'
            ],
            [
                'appId' => 'horror-game-baba-zina-run',
                'appType' => '99',
                'createdAt' => '2024-7-3 1:56:17'
            ],
        ];

        $this->batchInsert('ads_stats', [
            'appId',
            'appType',
            'createdAt',
        ], $insert);


        $this->db->createCommand()->createView('vads_stats','
            SELECT
                row_number() OVER(
                   ORDER BY appId
                ) AS id,
                appId,
                appType,
                SUM(timesCalled) AS sumTimesCalled,
                MAX(createdAt) AS firstCreatedAt,
                MIN(createdAt) AS lastCreatedAt
            FROM `ads_stats`
            GROUP BY appId, appType
        ')->execute();
    }

    /**
     * {@inheritdoc}
     * @throws \yii\db\Exception
     */
    public function safeDown()
    {
        echo "m240211_115918_ads_statistics cannot be reverted.\n";
        $this->dropIndex(
            'idx-ads-statistics-appid',
            'ads_stats'
        );
        $this->db->createCommand()->dropView('vads_stats')->execute();
        $this->dropTable('ads_stats');
        return false;
    }
}
