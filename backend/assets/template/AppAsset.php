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
		'<%- css %>',
	] : [
        'styles.css',
    ];
    public $js = (YII_ENV_PROD) ? [
		'<%- js1 %>',
		'<%- js2 %>',
		'<%- js3 %>',
	] : [
        'runtime.js',
        'polyfills.js',
        'main.js',
    ];
}
