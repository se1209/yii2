<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

// For basic edition;
//class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
// For advanced edition;
class User extends ActiveRecord implements IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
    public $authKey;
    public $accessToken;

    const ACTIVE_USER = 1;

    public static function tableName ()
    {
        return 'user';
    }

//    private static $users = [
//        '100' => [
//            'id' => '100',
//            'username' => 'admin',
//            'password' => 'admin',
//            'authKey' => 'test100key',
//            'accessToken' => '100-token',
//        ],
//        '101' => [
//            'id' => '101',
//            'username' => 'demo',
//            'password' => 'demo',
//            'authKey' => 'test101key',
//            'accessToken' => '101-token',
//        ],
//    ];

    public function rules()
    {
        return [
            [['email', 'password'], 'required', 'on' => 'registration'],
            [['active', 'is_email'], 'integer'],
            [['email', 'password', 'username', 'auth_key', 'code'], 'string', 'max' => 255],
            [['username', 'auth_key', 'code', 'active', 'is_email'], 'safe', 'on' => 'registration'],
        ];
    }

    // Отправка почты для подтверждения E-mail;
    public function sendConfirmationLink ()
    {
        $confirmationLinkUrl = Url::to(['site/confirmemail', 'email' => $this->email, 'code' => $this->code]);
        $confirmationLink = Html::a('Подтвердите E-mail', $confirmationLinkUrl);

        $sendingResult = Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo($this->email)
            ->setSubject('Подтвердите E-mail')
            ->setHtmlBody('<p>Кликните по ссылке для подтверждения своего E-mail</p>
            <p>'. $confirmationLink .'</p>')
            ->send();

        return $sendingResult;
    }

    public function attributeLabels()
    {
        return [
            'email' => 'E-mail',
            'username' => 'Ваше имя',
            'password' => 'Пароль',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

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
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
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
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
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
}
