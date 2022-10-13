<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
	public static function tableName()
	{
		return 'user';
	}

	public function rules()
	{
		return [
			[['login', 'password', 'name'], 'required'],
			[['login', 'password', 'name'], 'string', 'max' => 255],
			[['login'], 'unique'],
		];
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'login' => 'Логин',
			'password' => 'Пароль',
			'name' => 'Имя',
		];
	}

	public static function findIdentity($id)
	{
		return static::findOne($id);
	}

	public static function findIdentityByAccessToken($token, $type = null)
	{
		return null;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getAuthKey()
	{
		return null;
	}

	public function validateAuthKey($authKey)
	{
		return null;
	}

	public function validatePassword($password)
	{
		return $this->password === md5($password);
	}

	public static function findByLogin($login)
	{
		return self::find()->where(['login' => $login])->one();
	}

	public function beforeSave($insert)
	{
		if ($this->isNewRecord) {
			$this->password = md5($this->password);
		}
		return parent::beforeSave($insert);
	}

	public function login()
	{
		if ($this->validate()) {
			return Yii::$app->user->login($this, 3600 * 24 * 30);
		}
		return false;
	}
}
