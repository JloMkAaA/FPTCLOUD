<?php

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
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
			'options' => ['class' => 'navbar-nav ml-auto'],
			'items' => [
				['label' => 'Сменить тему', 'innerContainerOptions'=>['id' => 'themeSwitch']],
				['label' => 'Регистрация', 'url' => ['/user/signup'], 'visible' => Yii::$app->user->isGuest],
				['label' => 'Вход', 'url' => ['/user/signin'], 'visible' => Yii::$app->user->isGuest],
				[
					'label' => (Yii::$app->user->isGuest ? 'Unknown' : Yii::$app->user->identity->name),
					'items' => [
						['label' => 'Профиль', 'url' => ['/user/index']],
						['label' => 'Выход', 'url' => ['/user/signout']],
					],
					'visible' => !Yii::$app->user->isGuest
				],
			]
		]) ?>
		<?php NavBar::end(); ?>
	</header>

	<main id="main" class="flex-shrink-0" role="main">
		<?= $content ?>
	</main>

	<footer id="footer" class="mt-auto py-3 bg-light border-top">
		<div class="container">
			<div><?= Yii::powered() ?></div>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>