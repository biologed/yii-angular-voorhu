<?php

use yii\db\Connection;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/.env');

return [
    'class' => Connection::class,
    'dsn' => 'mysql:host=' . $_ENV['DB_HOST'] . ';port=' .$_ENV['DB_PORT'] . ';dbname=' . $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8',
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 600,
    'schemaCache' => 'cache',
    'enableQueryCache'=> true,
    'queryCacheDuration' => 3600,
];
