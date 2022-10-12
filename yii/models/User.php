<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $rule
 *
 * @property Friend[] $friends
 * @property Friend[] $friends0
 * @property User[] $idFriends
 * @property Music[] $idMusics
 * @property User[] $idUsers
 * @property Message[] $messages
 * @property Multimedia[] $multimedia
 * @property Music[] $musics
 * @property Mymusic[] $mymusics
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{


 /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::find()->where(['name' => $username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return null;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }












    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['rule'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 320],
            [['password'], 'string', 'max' => 32],
            [['name'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Введите имя',
            'email' => 'Введте почту',
            'password' => 'Пароль',
            'rule' => 'Админ',
        ];
    }

    /**
     * Gets query for [[Friends]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFriends()
    {
        return $this->hasMany(Friend::class, ['idUser' => 'id']);
    }

    /**
     * Gets query for [[Friends0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFriends0()
    {
        return $this->hasMany(Friend::class, ['idFriend' => 'id']);
    }

    /**
     * Gets query for [[IdFriends]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFriends()
    {
        return $this->hasMany(User::class, ['id' => 'idFriend'])->viaTable('friend', ['idUser' => 'id']);
    }

    /**
     * Gets query for [[IdMusics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdMusics()
    {
        return $this->hasMany(Music::class, ['id' => 'idMusic'])->viaTable('mymusic', ['idUser' => 'id']);
    }

    /**
     * Gets query for [[IdUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers()
    {
        return $this->hasMany(User::class, ['id' => 'idUser'])->viaTable('friend', ['idFriend' => 'id']);
    }

    /**
     * Gets query for [[Messages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::class, ['idUser' => 'id']);
    }

    /**
     * Gets query for [[Multimedia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMultimedia()
    {
        return $this->hasMany(Multimedia::class, ['idUser' => 'id']);
    }

    /**
     * Gets query for [[Musics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusics()
    {
        return $this->hasMany(Music::class, ['idUser' => 'id']);
    }

    /**
     * Gets query for [[Mymusics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMymusics()
    {
        return $this->hasMany(Mymusic::class, ['idUser' => 'id']);
    }
}
