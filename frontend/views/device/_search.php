<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Store;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'serial') ?>

    <?= $form->field($model, 'store')->dropDownList(
        Store::find()->select(['name'])->indexBy('name')->column(),
        ['prompt'=>'Select Store']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
