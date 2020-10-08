<?php

/* @var $this yii\web\View */

$this->title = 'Warehouse';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Warehouse</h1>
    <?php if(Yii::$app->user->isGuest):?>
        <p>Access Restricted</p>
    <?php else: ?>
        <a class="btn btn-lg btn-primary" href="device">Devices</a>
        <a class="btn btn-lg btn-info" href="store">Stores</a>
    <?php endif; ?>
    </div>

</div>

