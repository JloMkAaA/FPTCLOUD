<?php

use yii\bootstrap4\Html;
use yii\widgets\ListView;

$this->title = 'Профиль';
?>

<div class="container">
	<div class="row">
		<div class="border rounded my-3 p-3 bg-light">
			<h1><?= Html::encode($this->title) ?></h1>
		</div>
	</div>
</div>



<section class="section_user">

<div class="content_container">

<div class="left_content" style="border:solid; width:300px">
	<h5>Иноформация О пользователе</h4>

<p>
	Группа:
</p>

<p>
	Должность в техникуме:
</p>

<p>
	Успеваемость:
</p>
<div class="cirkle">
<!-- 
<canvas id="circlecanvas" width="100" height="100"></canvas> -->

</div>
</div>
<div class="center_content" style="position: relative;   margin: 0 auto;border:solid; width:300px">
<h5>Обсуждения в которых вы состоите</h1>

<p>
	Группа:
</p>

<p>
	Должность в техникуме:
</p>

<p>
	Успеваемость:
</p>
</div>
<div class="right_contetn" style="position:relative;  border:solid; width:300px">
<h5>Учебный план</h5>

<p>
	Группа:
</p>

<p>
	Должность в техникуме:
</p>

<p>
	Успеваемость:
</p>
</div>
</div>
</section>

<style>
	.content_container{
		display: flex;
		max-width: 1080px;
		margin: auto;
		
	}
</style>