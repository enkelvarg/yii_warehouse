<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

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
                'value' => function($model)
                {
                    return  Html::button($model->name,['class' => 'btn-link',
                                'onclick' => 'storeModal("'.Url::to(['store/modal']).'", "'.$model->id.'")']);
                },
            ],

            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:D d, M Y']
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'],
        ],
    ]); ?>

    <?php
    Modal::begin([
        'header' => 'Stored Devices',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);?>
    <div class="modal-body"></div>
    <?php
    Modal::end()
    ?>


    <?php Pjax::end(); ?>

</div>
