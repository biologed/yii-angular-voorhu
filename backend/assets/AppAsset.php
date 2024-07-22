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
		'main.50b2e1b0b4282458.js',
		'polyfills.746955fb3510a002.js',
		'runtime.12709cf9b63ab50d.js',
	] : [
        'runtime.js',
        'polyfills.js',
        'main.js',
    ];
}
