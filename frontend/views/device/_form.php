<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Store;

/* @var $this yii\web\View */
/* @var $model app\models\Device */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serial')->textInput() ?>

    <?= $form->field($model, 'store')->dropdownList(
        Store::find()->select(['name'])->indexBy('name')->column(),
        ['prompt'=>'Select Store']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
