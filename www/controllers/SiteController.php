<?php

namespace app\controllers;

use app\models\Category;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\controllers\CustomController;

class SiteController extends CustomController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    public $Password;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Получаем всё из таблицы 'category';
        $model = Category::find()->all();

        // Получаем запись с ID = 4;
        //$model = Category::findOne(4);
        // Получаем запись с ID = 3;
        //$model = Category::find()->where(['id' => 3])->all();

        // Получаем первые 2 записи;
        //$model = Category::find()->limit(2)->all();
        // Получаем  последние 2 записи;
        //$model = Category::find()->orderBy('id DESC')->limit(2)->all();

        return $this->render('index', compact('model'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegistrationLogin()
    {
        if (!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $this->setMeta('Регистрация/Авторизация');

        $registration = new User();
        $registration->scenario = 'registration';

        $login = new User();
        $login->scenario = 'login';

        if ($login->load(Yii::$app->request->post()) && $login->login())
        {
            return $this->goHome();
        }

        if ($registration->load(Yii::$app->request->post()))
        {

            $user = User::find()->where(['email' => $registration->email])->limit(1)->all();

            if (!$user) {
                $this->Password = $registration->password;
                $registration->password = Yii::$app->security->generatePasswordHash($registration->password);
                $registration->code = Yii::$app->getSecurity()->generateRandomString(10);

                if ($registration->save())
                {
                    $registration->sendConfirmationLink();
                    Yii::$app->session->setFlash('success', 'Вам отправлено письмо с ссылкой для подтверждения почтового адреса!');
                    return $this->goHome();
                }
                else
                {
                    $registration->password = $this->Password;
                    return $this->render('reglog', compact('registration'));
                }
            }
            else
            {
                Yii::$app->session->setFlash('info', 'Пользователь с таким E-mail существует, попробуйте восстановить пароль!');
                return $this->goHome();
            }
        }
        return $this->render('reglog', compact('registration'));
    }

    public function  actionConfirmemail ()
    {
        $email = Yii::$app->request->get('email');
        $code = Yii::$app->request->get('code');

        if (!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $user = User::find()->where(['email' => $email, 'code' => $code])->one();

        if ($user->active == 0)
        {
            $user->code = '';
            $user->active = User::ACTIVE_USER;

            if ($user->save())
            {
                $user->login();
                Yii::$app->session->setFlash('success', 'Аккаунт активирован');
                return $this->goHome();
            }
        }
        else
        {
            Yii::$app->session->setFlash('error', 'Не удалось активировать аккаунт, обратитесь к администрации сайта!');
            return $this->goHome();
        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
