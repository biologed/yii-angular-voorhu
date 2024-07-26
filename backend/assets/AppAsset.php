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
		'styles.dd21ec04b7fced51.css',
	];
    public $js = [
		'main.d9df956c6776ae00.js',
		'polyfills.746955fb3510a002.js',
		'runtime.55bf0158cbfc6aa4.js',
	];
    public $jsOptions = [
        'type' => 'module'
    ];
}
