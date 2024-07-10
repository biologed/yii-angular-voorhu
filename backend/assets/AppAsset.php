<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $depends = [
    ];

    public $css = (YII_ENV_PROD) ? [
        'styles.97c44a78e04e5fc1.css',
    ] : [
        'styles.css',
    ];
    public $js = (YII_ENV_PROD) ? [
        'runtime.2c07e462d395fbd9.js',
        'polyfills.746955fb3510a002.js',
        'main.9dc084de2a744f69.js',
    ] : [
        'runtime.js',
        'polyfills.js',
        'main.js',
    ];
}
