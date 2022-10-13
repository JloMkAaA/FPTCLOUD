<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Signin extends Model
{
	public $login;
	public $password;
	public $rememberMe = false;

	private $user = false;

	public function rules()
	{
		return [
			[['login', 'password'], 'required'],
			['rememberMe', 'boolean'],
			['password', 'validatePassword'],
		];
	}

	public function attributeLabels()
	{
		return [
			'login' => 'Логин',
			'password' => 'Пароль',
			'rememberMe' => 'Запомнить меня',
		];
	}

	public function validatePassword($attribute, $params)
	{
		if (!$this->hasErrors()) {
			$user = $this->getUser();

			if (!$user || !$user->validatePassword($this->password)) {
				$this->addError($attribute, 'Неверный логин или пароль.');
			}
		}
	}

	public function login()
	{
		if ($this->validate()) {
			return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
		}
		return false;
	}

	public function getUser()
	{
		if ($this->user === false) {
			$this->user = User::findByLogin($this->login);
		}
		return $this->user;
	}
}
