<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Store */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);

?>
<div class="store-view">

    <h2 class="text-left"><?= Html::encode($this->title) ?></h2>
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

<h4>Stored Devices:</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Serial Number</th>
            <th scope="col">Added</th>
        </tr>
    </thead>
        <tbody>
        <?php foreach($model->devices as $device): ?>
        <tr>
            <th scope="row"><?=$device->id?></th>
            <td><?= Html::a($device->serial, ['/device', 'DeviceSearch[serial]' => $device->serial],
                    ['onclick' => 'redirectDevice(this, event);']
                ) ?>
            </td>
            <td><?=$device->created_at?></td>
        </tr>
        </tbody>
        <?php endforeach;?>
 </table>

    <p class="text-right">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>


