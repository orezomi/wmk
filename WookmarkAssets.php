<?php

namespace orezomi\wmk;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class WookmarkAssets extends AssetBundle
{
	public $sourcePath = '@bower';
    public $css = [
        // 'css/reset.css',
        // '//plugin.wookmark.com/bower_components/normalize.css/normalize.css',
        'wookmark-jquery/css/main.css',
    ];
    public $js = [
        'imagesloaded/imagesloaded.pkgd.min.js',
        'wookmark-jquery/jquery.wookmark.min.js'
        // 'wookmark-jquery/jquery.wookmark.min.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'dmstr\web\AdminLteAsset',
        'app\assets\AppAsset',
    ];
}
