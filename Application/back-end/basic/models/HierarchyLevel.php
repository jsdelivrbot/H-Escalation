<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hierarchy_level".
 *
 * @property integer $id
 * @property string $level_num
 * @property integer $department1_id
 *
 * @property Department1 $department1
 */
class HierarchyLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hierarchy_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department1_id'], 'required'],
            [['department1_id'], 'integer'],
            [['level_num'], 'string', 'max' => 1],
            [['department1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department1::className(), 'targetAttribute' => ['department1_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_num' => 'Level Num',
            'department1_id' => 'Department1 ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment1()
    {
        return $this->hasOne(Department1::className(), ['id' => 'department1_id']);
    }
}
