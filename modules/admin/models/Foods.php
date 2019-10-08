<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "foods".
 *
 * @property int $id
 * @property string $name
 * @property int $type_of_food
 * @property string $recipe
 * @property string $date_time
 *
 * @property TypeOfFood $typeOfFood
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type_of_food', 'recipe', 'date_time'], 'required'],
            [['name', 'recipe'], 'string'],
            [['type_of_food'], 'integer'],
            [['date_time'], 'safe'],
            [['type_of_food'], 'unique'],
            [['type_of_food'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfFood::className(), 'targetAttribute' => ['type_of_food' => 'id']],
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
            'type_of_food' => 'Type Of Food',
            'recipe' => 'Recipe',
            'date_time' => 'Date Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeOfFood()
    {
        return $this->hasOne(TypeOfFood::className(), ['id' => 'type_of_food']);
    }
}
