<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property integer $id
 * @property string $tick_type
 * @property string $tick_details
 * @property string $tick_status
 * @property string $tick_priority
 * @property string $tick_date
 * @property string $tick_limit
 * @property string $tick_closed_time
 * @property integer $tick_escalate
 * @property integer $employee1_id
 *
 * @property EscalatedTicket[] $escalatedTickets
 * @property Employee1 $employee1
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tick_type', 'tick_details', 'tick_status', 'tick_priority', 'tick_date', 'tick_limit', 'tick_closed_time', 'tick_escalate', 'employee1_id'], 'required'],
            [['tick_date', 'tick_limit', 'tick_closed_time'], 'safe'],
            [['tick_escalate', 'employee1_id'], 'integer'],
            [['tick_type'], 'string', 'max' => 45],
            [['tick_details'], 'string', 'max' => 255],
            [['tick_status', 'tick_priority'], 'string', 'max' => 10],
            [['employee1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee1::className(), 'targetAttribute' => ['employee1_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tick_type' => 'Tick Type',
            'tick_details' => 'Tick Details',
            'tick_status' => 'Tick Status',
            'tick_priority' => 'Tick Priority',
            'tick_date' => 'Tick Date',
            'tick_limit' => 'Tick Limit',
            'tick_closed_time' => 'Tick Closed Time',
            'tick_escalate' => 'Tick Escalate',
            'employee1_id' => 'Employee1 ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalatedTickets()
    {
        return $this->hasMany(EscalatedTicket::className(), ['service_ticket_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee1()
    {
        return $this->hasOne(Employee1::className(), ['id' => 'employee1_id']);
    }
}
