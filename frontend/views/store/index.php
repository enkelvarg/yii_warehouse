<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Store */

$this->title = 'Stores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Store', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->name, ['/store/view/', 'id' => $model->id],[
                       'id' => 'device-view-link',
                       'title' => Yii::t('yii', 'View Store'),
                       'data' => [
                           'target' => '#device-modal',
                           'toggle' => 'modal',
                           'backdrop' => 'static',
                       ]
                    ]);
                }
            ],

            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:D d, M Y']
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php
    Modal::begin([
        'header' => 'Stored Devices',
        'id' => 'device-modal',
        'size' => 'modal-lg',
    ]);
    Modal::end()
    ?>

    <?php $this->registerJs(
        "$('.device-view-link').click(function() {
           function (data) {
               $('.modal-body').html(data);
               $('#device-modal').modal();
           }  
        );
        });"
    ); ?>

    <?php Pjax::end(); ?>


</div>
