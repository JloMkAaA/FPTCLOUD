<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\User $model */

?>
<div class="user-create">
<div class="content_container">
    <button style=" background:transparent; background-image: url(../uploads/sun.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="sun_btn" onclick="bg_sun()"></button>
    <button style=" background:transparent; background-image: url(../uploads/moon.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="muun_mtn" onclick="bg_mun()" ></button>
    </div>
    <h1>Регистрация</h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
