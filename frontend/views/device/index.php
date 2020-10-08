<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use app\models\Store;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Devices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Device', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serial',

            [
                'attribute' => 'store_id',
                'value' => function($model) {
                    return empty($model->store) ? null : $model->store->name;
                },
                'filter' => ArrayHelper::map(Store::find()->asArray()->all(), 'id', 'name'),
                'filterType' => GridView::FILTER_SELECT2,
                'filterWidgetOptions' => [
                    'options' => ['prompt' => ''],
                    'pluginOptions' => ['allowClear' => true],
                ],
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:D d, M Y. H:i']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    <?php Pjax::end(); ?>

</div>
