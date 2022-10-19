<?php

namespace app\controllers;

use Yii;
use yii\bootstrap4\ActiveForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\User;
use app\models\File;

use yii\filters\AccessControl;

class SiteController extends Controller
{
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	public function actionIndex()
	{
		$model = User::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $model,
			'pagination' => [
				'pageSize' => 2,
			],
		]);

		return $this->render('index', ['dataProvider' => $dataProvider]);
	}
}
