<?php
/**
 * Created by PhpStorm.
 * User: SE
 * Date: 06.08.2018
 * Time: 17:53
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            [['title', 'description', 'keywords'], 'required'],
            [['title', 'description', 'keywordss'], 'resquired'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'description' => 'Описание',
            'keywordss' => 'Ключевые слова',
        ];
    }
}