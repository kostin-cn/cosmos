<?php

namespace common\entities;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%feedback}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property int $created_at
 * @property int $status
 */
class Feedback extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%feedback}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false,
            ]
        ];
    }

    public function rules()
    {
        return array_filter([
            [['name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['created_at'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'E-mail',
            'message' => 'Сообщение',
            'created_at' => 'Дата',
            'status' => 'Статус',
        ];
    }
}
