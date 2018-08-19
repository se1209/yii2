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
        //$auth->add($user);
        $auth->add($courier);
        $auth->add($manager);
        $auth->add($admin);

        // Добавляем и описываем роли;
        /*$registration = $auth->createPermission('registration');
        $registration->description = 'Регистрация';*/

        $adminPage = $auth->createPermission('adminPage');
        $adminPage->description = 'Просмотр админки';

        $viewPanelCourier = $auth->createPermission('viewPanelCourier');
        $viewPanelCourier->description = 'Панель курьера';

        $viewPanelManager = $auth->createPermission('viewPanelManager');
        $viewPanelManager->description = 'Панель менеджера';

        // Записываем роли в БД;
        $auth->add($adminPage);
        $auth->add($viewPanelCourier);
        $auth->add($viewPanelManager);

        // Присваеваем разрешения ролям;
        $auth->addChild($courier, $viewPanelCourier);
        $auth->addChild($manager, $viewPanelManager);

        // Наследуем роли;
        $auth->addChild($manager, $courier);
        $auth->addChild($admin, $manager);

        // Разрешения админа;
        $auth->addChild($admin, $adminPage);

        // Прописываем админа и менеджера;
        $auth->assign($admin, 1);
        $auth->assign($manager, 6);
    }
}