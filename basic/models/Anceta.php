<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anceta".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $questions
 * @property int $rating
 */
class Anceta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anceta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'questions'], 'required'  ,'message' => 'Заполните поле'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'questions' => 'Вопрос',
            'rating' => 'Оценка',
        ];
    }
}
