<?php
/**
 * Created by PhpStorm.
 * User: SE
 * Date: 07.08.2018
 * Time: 11:35
 */

namespace app\controllers;
use yii\web\Controller;

class CustomController extends Controller
{
    protected function setMeta ($title = null, $description = null, $keywords = null)
    {
        $this->view->title = $this;
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
    }

    public static function printR ($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
}