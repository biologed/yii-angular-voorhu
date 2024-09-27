<?php
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

    public $css = [
		'styles.1e0028ee942d2d13.css',
	];
    public $js = [
		'main.4bb035dab8210ed0.js',
		'polyfills.746955fb3510a002.js',
		'runtime.31506c0688cec9fa.js',
	];
    public $jsOptions = [
        'type' => 'module'
    ];
}
