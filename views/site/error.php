<?php

use yii\bootstrap5\Html;

$this->title = $name;
?>

<div class="container">
	<div class="py-3 text-center">
		<h1><?= Html::encode($this->title) ?></h1>
		<p><?= nl2br(Html::encode($message)) ?></p>
	</div>
</div>