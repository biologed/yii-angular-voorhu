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

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SerpApiController extends Controller
{
    /**
     * @throws \yii\db\Exception
     * @throws Exception|InvalidConfigException
     */
    public function actionIndex(): int
    {
        echo "cron service was started";

        $dotenv = new Dotenv();
        $dotenv->loadEnv(__DIR__ . '/.env');

        $sql = 'SELECT vs.appId FROM voorhu.vads_stats vs LEFT JOIN voorhu.play_market_info pmi ON vs.appId = pmi.appId WHERE vs.appType = 1 AND pmi.appId IS NULL';
        $apps = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($apps as $app) {
            $appId = str_replace("-", ".", $app['appId']);
            $client = new Client();
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://serpapi.com/search')
                ->setData([
                    'engine' => 'google_play_product',
                    'store' => 'apps',
                    'product_id' => $appId,
                    'api_key' => $_ENV['APP_SERP_API_KEY']
                ])
                ->send();
            if ($response->isOk) {
                $data = $response->data;
                \Yii::info($data);
                if (isset($data['search_information']) && $data['search_information']['organic_results_state'] == 'Fully empty') {
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
        }

        echo "cron service was finished";
        return ExitCode::OK;
    }
}
