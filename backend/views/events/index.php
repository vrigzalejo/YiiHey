<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                     = 'Events';
$this->params[ 'breadcrumbs' ][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode( $this->title ) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    Modal::begin([
        'header' => '<h4>Events</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);

    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>

    <?= yii2fullcalendar\yii2fullcalendar::widget( [
        'events' => $events,
    ] );
    ?>

</div>
