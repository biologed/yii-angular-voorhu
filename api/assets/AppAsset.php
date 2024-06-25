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
        'styles.e519eee85385b559.css',
    ] : [
        'styles.css',
    ];
    public $js = (YII_ENV_PROD) ? [
        'runtime.fd9b191b4ccd37c6.js',
        'polyfills.08499eb88f05c6aa.js',
        'main.6c0c35a6aa24f6d7.js',
    ] : [
        'runtime.js',
        'polyfills.js',
        'main.js',
    ];
}
