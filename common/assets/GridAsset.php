<?php
/**
 * Created by PhpStorm.
 * User: Hexagen
 * Date: 04.09.2017
 * Time: 17:42
 */
namespace common\assets;

use yii\web\AssetBundle;

class GridAsset extends AssetBundle
{
    public $sourcePath = '@common/css';
    public $css = [
        'bootstrap-reboot.css',
        'bootstrap-grid.css',
    ];
}