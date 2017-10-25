<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department1".
 *
 * @property integer $id
 * @property string $dept_name
 *
 * @property Employee1[] $employee1s
 */
class Department1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_name'], 'required'],
            [['dept_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dept_name' => 'Dept Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee1s()
    {
        return $this->hasMany(Employee1::className(), ['dept_id' => 'id']);
    }
}
