<?php
/**
 * Created by PhpStorm.
 * User: Elena
 * Date: 29.12.2018
 * Time: 19:42
 */

namespace app\models;


use yii\db\ActiveRecord;

class Style extends ActiveRecord
{
    public static function tableName()
    {
        return 'style';
    }
}