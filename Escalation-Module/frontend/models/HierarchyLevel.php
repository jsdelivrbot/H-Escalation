<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hierarchy_level".
 *
 * @property integer $id
 * @property string $level_num
 * @property integer $department_id
 *
 * @property EscalatedTicket[] $escalatedTickets
 * @property Department $department
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
            [['level_num', 'department_id'], 'required'],
            [['department_id'], 'integer'],
            [['level_num'], 'string', 'max' => 1],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
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
            'department_id' => 'Department ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalatedTickets()
    {
        return $this->hasMany(EscalatedTicket::className(), ['hierarchy_level_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}
