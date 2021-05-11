<?php
/**
 * Created by PhpStorm.
 * User: Hexagen
 * Date: 17.10.2016
 * Time: 16:07
 */

namespace common\assets;


use yii\web\AssetBundle;

class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@common/js';
    public $js = [
        'jquery.js',
        'bootstrap.min.js',
    ];
}
