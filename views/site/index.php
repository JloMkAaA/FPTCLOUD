<?php

use yii\bootstrap4\Html;
use yii\widgets\ListView;

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

<!-- 

 //ListView::widget([
	// 'dataProvider' => $dataProvider,

	// 'pager' => [
	// 	'firstPageLabel' => 'Первая',
	// 	'lastPageLabel' => 'Последняя',
	// 	'nextPageLabel' => 'Следующая',
	// 	'prevPageLabel' => 'Предыдущая',
	// 	'maxButtonCount' => 5,
	// ],
	// 'emptyText' => '<p>Список пуст</p>',
	// // 'itemOptions'=>[
	// // 	'class'=>'bg-dark text-center',
	// // ],
	// 'itemView' => function ($model, $key, $index, $widget) {
	// 	if ($index % 2 == 0) {
	// 		return Html::tag('div', $key . ' - ' . $model->name, ['class' => 'bg-white text-center']);
	// 	}
	// 	return Html::tag('div', $key . ' - ' . $model->name, ['class' => 'bg-dark']);
	// },
//])  -->