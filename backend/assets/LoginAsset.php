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
    public $css      = [
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'css/AdminLTE.min.css',
        'plugins/iCheck/flat/blue.css',
    ];
    public $js       = [
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
        '//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'js/app.min.js',
        'js/dashboard.js',
        'js/main.js',
    ];
    public $depends  = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}