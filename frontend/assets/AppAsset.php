<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/adventures.css',
    ];
    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=d268f24e-8ead-4eb8-92dc-9ae15020102f1',
        'js/map.js',
        'js/tiny-slider.js',
        'js/script.js',
        'js/adventures.js',
        'js/slider-home.js',
        'js/index-brands.js',
        'js/reserve.js',
        'js/hotel.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
