<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Signin;
use app\models\User;

class UserController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['signup', 'signin', 'signout'],
				'rules' => [
					[
						'actions' => ['signup', 'signin'],
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

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionSignup()
	{
		$model = new User();
		if ($this->request->isPost) {
			if ($model->load($this->request->post()) && $model->save() && $model->login()) {
				return $this->goBack();
			}
		} else {
			$model->loadDefaultValues();
		}

		return $this->render('signup', ['model' => $model]);
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
