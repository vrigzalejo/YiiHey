<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/3/2015
 * Time: 6:30 AM
 */

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PoItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Po Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-item-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'po_item_no',
            'quantity',
        ],
    ]); ?>

</div>
