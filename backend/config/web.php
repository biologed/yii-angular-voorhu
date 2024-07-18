<?php

use yii\web\UrlManager;
use app\models\Users;

use yii\debug\Module;
use yii\log\FileTarget;
use yii\web\JsonParser;
use yii\symfonymailer\Mailer;

use yii\redis\Session;
use yii\redis\Cache;
use yii\redis\Connection;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/.env');

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'timeZone'   => 'Europe/Moscow',
    'components' => [
        'request' => [
            'cookieValidationKey' => $_ENV['APP_SECRET'],
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => JsonParser::class,
                'charset' => 'UTF-8',
            ],
        ],
        'session' => [
            'class' => Session::class,
            'redis' => [
                'class' => Connection::class,
                'hostname' => 'localhost',
                'password' => $_ENV['APP_REDIS_SECRET'],
                'port' => (int) $_ENV['APP_REDIS_PORT'],
                'database' => 0,
            ]
        ],
        'cache' => [
            'class' => Cache::class,
            'redis' => [
                'class' => Connection::class,
                'hostname' => 'localhost',
                'password' => $_ENV['APP_REDIS_SECRET'],
                'port' => (int) $_ENV['APP_REDIS_PORT'],
                'database' => 1,
            ]
        ],
        'user' => [
            'identityClass' => Users::class,
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => Mailer::class,
            'transport' => [
                'scheme' => $_ENV['APP_MAIL_SCHEME'],
                'host' => $_ENV['APP_MAIL_HOST'],
                'username' => $_ENV['APP_MAIL_USERNAME'],
                'password' => $_ENV['APP_MAIL_PASSWORD'],
                'port' => (int) $_ENV['APP_MAIL_PORT'],
            ],
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['info', 'error', 'warning'],
                    'enabled' => YII_DEBUG,
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'class' => UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                '<controller:(boosty|discord)>/<action:(get-total-members)>' => '<controller>/<action>',
                '<controller:(auth)>/<action:(sign-in|sign-up|logout|status|activation|get-access-token-from-epic|sign-up-from-epic)>' => '<controller>/<action>',
                //Для Angular
                '/' => 'site/index',
                '<controller:(auth)>/<action:(login|registration|epic)>' => 'site/index',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => Module::class,
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => \yii\gii\Module::class,
    ];
}

return $config;