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

    public $css = (YII_ENV_PROD) ? [
        'styles.1e0028ee942d2d13.css',
    ] : [
        'styles.css',
    ];
    public $js = (YII_ENV_PROD) ? [
        'runtime.0e6e058ad1154643.js',
        'polyfills.746955fb3510a002.js',
        'main.3b1c079c06d7721b.js',
    ] : [
        'runtime.js',
        'polyfills.js',
        'main.js',
    ];
}
