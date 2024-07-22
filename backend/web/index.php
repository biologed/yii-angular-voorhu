<?php

// comment out the following two lines when deployed to production
use yii\base\InvalidConfigException;
use yii\web\Application;

//if ($_SERVER['HTTP_HOST'] === 'localhost:3009') {
//    defined('YII_DEBUG') or define('YII_DEBUG', true);
//    defined('YII_ENV') or define('YII_ENV', 'dev');
//}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';
try {
    (new Application($config))->run();
} catch (InvalidConfigException $e) {
}
