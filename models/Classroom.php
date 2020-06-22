<?php

namespace app\models;


/**
 * This is the model class for table "classroom".
 *  @package app\models
 *
 * @property int $activation
 * @property int $id
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activation'], 'required'],
            [['activation'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activation' => 'Activation',
        ];
    }
}
