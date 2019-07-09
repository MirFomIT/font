<?php
/**
 * Created by PhpStorm.
 * User: Elena
 * Date: 29.12.2018
 * Time: 20:03
 */

namespace app\models;


use yii\db\ActiveRecord;

class Family extends ActiveRecord
{
    public static function tableName()
    {
        return 'family';
    }
}