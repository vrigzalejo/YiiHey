<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/7/2015
 * Time: 2:04 AM
 */

namespace backend\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [ ];
    public $js       = [ ];
    public $depends
                     = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
}