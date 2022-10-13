<?php

namespace app\models;

use Yii;
use yii\base\BaseObject;
use yii\web\IdentityInterface;

class User extends BaseObject implements IdentityInterface
{
	public $id;
	public $username;
	public $password;

	private static $users = [
		'1' => [
			'id' => '1',
			'username' => 'admin',
			'password' => 'admin',
		],
	];

	public static function findIdentity($id)
	{
		return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
	}

	public static function findIdentityByAccessToken($token, $type = null)
	{
		return null;
	}

	public static function findByUsername($username)
	{
		foreach (self::$users as $user) {
			if (strcasecmp($user['username'], $username) === 0) {
				return new static($user);
			}
		}
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
		return $this->password === $password;
	}
}
