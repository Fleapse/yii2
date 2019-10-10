<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "type_of_food".
 *
 * @property int $id
 * @property string $name
 *
 * @property Foods $foods
 */
class TypeOfFood extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_of_food';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasOne(Foods::className(), ['type_of_food' => 'id']);
    }
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(),'id','name');
    //        return ['1'=>'a', '3'=>'c'];
    }
}
