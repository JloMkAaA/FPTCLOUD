<?php

use app\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerCsrfMetaTags();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
	<?php $this->beginBody() ?>

	<header id="header">
		<?php NavBar::begin([
			'brandLabel' => Html::tag('div', Html::img(['/favicon.ico'], ['alt' => 'Logo', 'class' => 'me-1', 'width' => '24']) . Yii::$app->name, ['class' => 'd-flex align-items-center']),
			'brandUrl' => Yii::$app->homeUrl,
			'options' => ['class' => 'navbar-expand-md navbar-light bg-light border-bottom']
		]); ?>
		<?= Nav::widget([
			'options' => ['class' => 'navbar-nav ms-auto'],
			'items' => [
				['label' => 'Регистрация', 'url' => ['/user/signup'], 'visible' => Yii::$app->user->isGuest===true],
				['label' => 'Вход', 'url' => ['/user/signin'], 'visible' => Yii::$app->user->isGuest===true],
				['label' => 'Выход', 'url' => ['/user/signout'], 'visible' => Yii::$app->user->isGuest===false],
			]
		]) ?>
		<?php NavBar::end(); ?>
	</header>

	<main id="main" class="flex-shrink-0" role="main">
		<?= $content ?>
	</main>

	<footer id="footer" class="mt-auto py-3 bg-light border-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
				<div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
			</div>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>