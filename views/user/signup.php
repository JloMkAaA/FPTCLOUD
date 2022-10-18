<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Регистрация';
?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<div class="rounded my-3 p-3 d-flex justify-content-center" style="background-color:#2a2b38">
				<?php $form = ActiveForm::begin(['options' => ['class' => 'w-100']]); ?>
				<h1 class="text-center mb-4"><?= Html::encode($this->title) ?></h1>
				<?= $form->field($model, 'login')->textInput(['autofocus' => true, 'class' => 'form-style ', 'placeholder' => 'введите логин'])->label(false) ?>
				<?= $form->field($model, 'password')->passwordInput(['class' => 'form-style', 'placeholder' => 'введите пароль'])->label(false) ?>
				<?= $form->field($model, 'name')->textInput(['class' => 'form-style', 'placeholder' => 'введите ваше имя'])->label(false) ?>
				<div class="d-flex justify-content-center mt-4"><?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success']) ?></div>
				<?php ActiveForm::end(); ?>
			</div>

		</div>
	</div>
</div>