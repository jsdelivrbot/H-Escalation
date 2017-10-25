<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property integer $id
 * @property string $tick_closed_time
 * @property string $tick_date
 * @property integer $tick_escalate
 * @property string $description
 * @property string $timelimit
 * @property string $status
 * @property string $priority
 * @property integer $ticket_type_id
 * @property integer $department_id
 * @property integer $room_room_no
 * @property integer $user_id
 *
 * @property EscalatedTicket[] $escalatedTickets
 * @property Department $department
 * @property Room $roomRoomNo
 * @property TicketType $ticketType
 * @property User $user
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
            [['tick_closed_time', 'tick_date', 'timelimit'], 'safe'],
            [['tick_date', 'tick_escalate', 'ticket_type_id', 'department_id', 'room_room_no'], 'required'],
            [['tick_escalate', 'ticket_type_id', 'department_id', 'room_room_no', 'user_id'], 'integer'],
            [['description', 'status', 'priority'], 'string', 'max' => 45],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['room_room_no'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_room_no' => 'room_no']],
            [['ticket_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TicketType::className(), 'targetAttribute' => ['ticket_type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tick_closed_time' => 'Tick Closed Time',
            'tick_date' => 'Tick Date',
            'tick_escalate' => 'Tick Escalate',
            'description' => 'Description',
            'timelimit' => 'Timelimit',
            'status' => 'Status',
            'priority' => 'Priority',
            'ticket_type_id' => 'Ticket Type ID',
            'department_id' => 'Department ID',
            'room_room_no' => 'Room Room No',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalatedTickets()
    {
        return $this->hasMany(EscalatedTicket::className(), ['ticket_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomRoomNo()
    {
        return $this->hasOne(Room::className(), ['room_no' => 'room_room_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketType()
    {
        return $this->hasOne(TicketType::className(), ['id' => 'ticket_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
