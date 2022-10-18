<?php

use yii\bootstrap4\Html;

$this->title = Yii::$app->name;
?>

<div class="container">
	<div class="py-3">
		<h1><?= Html::encode($this->title) ?></h1>
		<div class="d-inline-flex align-items-center">
			<span class="me-3">Тёмная тема:</span>
			<?= Html::button('Выкл.', ['class' => 'btn btn-white', 'onclick' => 'changeTheme(this)']) ?>
		</div>
	</div>
</div>