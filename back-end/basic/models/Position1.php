<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position1".
 *
 * @property integer $id
 * @property string $pos_name
 * @property string $pos_des
 *
 * @property Employee1[] $employee1s
 */
class Position1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pos_name', 'pos_des'], 'required'],
            [['pos_name'], 'string', 'max' => 30],
            [['pos_des'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pos_name' => 'Pos Name',
            'pos_des' => 'Pos Des',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee1s()
    {
        return $this->hasMany(Employee1::className(), ['pos_id' => 'id']);
    }
}
