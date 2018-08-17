<?php
/**
 * Created by PhpStorm.
 * User: SE
 * Date: 17.08.2018
 * Time: 22:59
 */

namespace app\commands;
use yii\console\Controller;
use app\models\User;
use Yii;


class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Удалить старые записи в БД;
        $auth->removeAll();

        // Создадим роли;
        $user = $auth->createRole('user');
        $courier = $auth->createRole('courier');
        $manager = $auth->createRole('manager');
        $admin = $auth->createRole('admin');

        // Записываем роли в БД;
        $auth->add($user);
        $auth->add($courier);
        $auth->add($manager);
        $auth->add($admin);
    }
}