<?php
/**
 * Created by PhpStorm.
 * User: Elena
 * Date: 29.12.2018
 * Time: 19:42
 */

namespace app\models;


use yii\db\ActiveRecord;

class Size extends ActiveRecord
{
    public static function tableName()
    {
        return 'size';
    }
}