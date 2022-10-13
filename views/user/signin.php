<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="border rounded my-3 p-3 bg-light">
				<h1><?= Html::encode($this->title) ?></h1>

				<?php $form = ActiveForm::begin(); ?>
				<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
				<?= $form->field($model, 'password')->passwordInput() ?>
				<?= $form->field($model, 'rememberMe')->checkbox() ?>
				<div class="form-group"><?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?></div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>