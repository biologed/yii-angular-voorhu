<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\base\InvalidConfigException;
use yii\httpclient\Client;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\httpclient\Exception;
use Symfony\Component\Dotenv\Dotenv;

class SerpApiController extends Controller
{
    /**
     * @throws \yii\db\Exception
     * @throws Exception|InvalidConfigException
     */
    public function actionIndex(): int
    {
        //* * * * * <your-application-folder>/yii cron/cron/run 2 > &1
        echo "\033[01;31m Cron service was started \033[0m\n";

        $dotenv = new Dotenv();
        $dotenv->loadEnv(__DIR__ . '/.env');

        $apps = Yii::$app->db->createCommand('SELECT vs.appId FROM voorhu.vads_stats vs LEFT JOIN voorhu.play_market_info pmi ON vs.appId = pmi.appId WHERE vs.appType = :appType AND pmi.appId IS NULL', [
            ':appType' => 1
        ])->queryAll();
        foreach ($apps as $key => $app) {
            echo "\033[01;33m Process the " . $key . "st application \033[0m\n";

            $appId = str_replace("-", ".", $app['appId']);
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($_ENV['APP_SERP_API_URL'])
                ->setData([
                    'engine' => 'google_play_product',
                    'store' => 'apps',
                    'product_id' => $appId,
                    'api_key' => $_ENV['APP_SERP_API_KEY']
                ])
                ->send();
            if ($response->isOk) {
                echo "\033[01;32m API connection established \033[0m\n";

                $data = $response->data;
                if (isset($data['search_information']) && $data['search_information']['organic_results_state'] === 'Fully empty') {
                    Yii::$app->db->createCommand()->insert('play_market_info', [
                        'appId' => $app['appId'],
                        'url' => $data['search_metadata']['google_play_product_url'],
                        'title' => 'not_published',
                        'json' => $data,
                    ])->execute();
                } else {
                    Yii::$app->db->createCommand()->insert('play_market_info', [
                        'appId' => $app['appId'],
                        'categoryName' => $data['categories'][0]['name'],
                        'authors' => $data['product_info']['authors'][0]['name'],
                        'url' => $data['search_metadata']['google_play_product_url'],
                        'title' => $data['product_info']['title'],
                        'rating' => $data['product_info']['rating'] ?? 0,
                        'reviews' => $data['product_info']['reviews'] ?? 0,
                        'downloads' => $data['product_info']['downloads'] ?? 0,
                        'json' => $data,
                    ])->execute();
                }
            }
            echo "\033[01;33m Processing of the " . $key . "st application is complete \033[0m\n";
        }

        echo "\033[01;31m Cron service was finished \033[0m\n";
        return ExitCode::OK;
    }
}
