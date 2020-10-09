<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Store */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);

?>
<div class="store-view">

    <h2 class="text-center"><?= Html::encode($this->title) ?></h2>
    <p class="text-center">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute' => 'created_at',
                'label' => 'Opened',
                'format' => ['date', 'php:D d, M Y']
            ],
        ],
    ]) ;
    ?>
    <div>
        <h3 class="text-center">Stored Devices:</h3>
        <?php foreach($model->devices as $device): ?>
            <div class="text-center">
                <h4><?= Html::a($device->serial, ['/device/view/', 'id' => $device->id], ['target'=>'_blank']) ?></h4>
            </div>
        <?php endforeach;?>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" style="background-color: #9acfea;!important;" data-dismiss="modal">Close</button>
    </div>
</div>


