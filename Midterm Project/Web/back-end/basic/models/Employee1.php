<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee1".
 *
 * @property integer $id
 * @property integer $emp_num
 * @property string $emp_fname
 * @property string $emp_mname
 * @property string $emp_lname
 * @property string $emp_contact_no
 * @property integer $dept_id
 * @property integer $pos_id
 *
 * @property Department1 $dept
 * @property Position1 $pos
 * @property Ticket[] $tickets
 */
class Employee1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_num', 'emp_fname', 'emp_lname', 'emp_contact_no', 'dept_id', 'pos_id'], 'required'],
            [['emp_num', 'dept_id', 'pos_id'], 'integer'],
            [['emp_fname', 'emp_mname', 'emp_lname'], 'string', 'max' => 45],
            [['emp_contact_no'], 'string', 'max' => 15],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department1::className(), 'targetAttribute' => ['dept_id' => 'id']],
            [['pos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position1::className(), 'targetAttribute' => ['pos_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_num' => 'Emp Num',
            'emp_fname' => 'Emp Fname',
            'emp_mname' => 'Emp Mname',
            'emp_lname' => 'Emp Lname',
            'emp_contact_no' => 'Emp Contact No',
            'dept_id' => 'Dept ID',
            'pos_id' => 'Pos ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department1::className(), ['id' => 'dept_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPos()
    {
        return $this->hasOne(Position1::className(), ['id' => 'pos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['employee1_id' => 'id']);
    }
}
