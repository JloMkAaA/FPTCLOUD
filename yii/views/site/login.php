<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Вход';

?>
<div class="site-login">
    <button style=" background:transparent; background-image: url(../uploads/sun.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="sun_btn" onclick="bg_sun()"></button>
    <button style=" background:transparent; background-image: url(../uploads/moon.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="muun_mtn" onclick="bg_mun()" ></button>

    <h1><?= Html::encode($this->title) ?></h1>
 
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3 color-grey'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>
  
        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?php 
                    echo Html::submitButton('Войти', ['class' => 'btn btn-primary mr-1 section_btn-login', 'name' => 'login-button']);
                    echo Html::a('Регистрация', Url::toRoute('user/create'), $options = ['class' => 'btn btn-primary m-1 mr-1 section_btn-creat'])
                ?>
            </div>
        </div>
     
    <?php ActiveForm::end(); ?>
    <section class="content_login">
    </section>
   <style>

   </style>
   <script>
function bg_sun(){
    document.body.style.backgroundColor = 'white';
    document.getElementById("loginform-username").style.backgroundColor = 'white';
    document.getElementById("loginform-password").style.backgroundColor = 'white'; 
}
function bg_mun(){
    document.body.style.backgroundColor = 'gray';
    document.getElementById("loginform-username").style.backgroundColor = 'gray'; 
    document.getElementById("loginform-password").style.backgroundColor = 'gray'; 
}

   </script>
   <script>
    function a()
    {document.getElementById('info').innerHTML = '../uploads/sun.png' + 'drftghjk';}
    function b()
    {document.getElementById('info').innerHTML = 'kod6';}   

    document.getElementById('sun_btn').addEventListener('click', function() {
  let l = document.createElement('img');
  l.src = '../uploads/sun.png';
  
  document.body.appendChild(l);
});  
</script>

</head>
<body>
<input type="button" value="Hello!" name="hello" OnClick="a();">
<input type="button" value="Hello!" name="hello" OnClick="b();">
<div id="info"></div>
</div>
