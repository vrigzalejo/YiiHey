<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/6/15
 * Time: 11:10 PM
 */

namespace backend\components;

use Yii;
use yii\base\Component;

class YiiHeyComponent extends Component
{
    public function hello()
    {
        echo "Hello, Vrigz!";
    }
}