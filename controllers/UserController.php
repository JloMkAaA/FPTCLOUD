<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Signin;

class UserController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['signin', 'signout'],
				'rules' => [
					[
						'actions' => ['signin'],
						'allow' => true,
						'roles' => ['?'],
					],
					[
						'actions' => ['signout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}

	public function actionSignin()
	{
		$model = new Signin();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}

		$model->password = '';
		return $this->render('signin', ['model' => $model]);
	}

	public function actionSignout()
	{
		Yii::$app->user->logout();
		return $this->goHome();
	}
}
