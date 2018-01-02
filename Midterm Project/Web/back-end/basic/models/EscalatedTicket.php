<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escalated_ticket".
 *
 * @property integer $id
 * @property string $esc_date_received
 * @property string $esc_time_receive
 * @property string $esc_reason
 * @property string $esc_owner
 * @property string $esc_status
 * @property string $esc_priority
 * @property string $esc_time_closed
 * @property string $esc_date_closed
 * @property integer $ticket_id
 * @property integer $esc_level
 *
 * @property HierarchyLevel $escLevel
 * @property Ticket $ticket
 */
class EscalatedTicket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escalated_ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['esc_date_received', 'esc_time_receive', 'esc_reason', 'esc_owner', 'esc_status', 'esc_priority', 'esc_time_closed', 'esc_date_closed', 'ticket_id', 'esc_level'], 'required'],
            [['esc_date_received', 'esc_time_receive', 'esc_time_closed', 'esc_date_closed'], 'safe'],
            [['ticket_id', 'esc_level'], 'integer'],
            [['esc_reason'], 'string', 'max' => 100],
            [['esc_owner'], 'string', 'max' => 45],
            [['esc_status', 'esc_priority'], 'string', 'max' => 10],
            [['esc_level'], 'exist', 'skipOnError' => true, 'targetClass' => HierarchyLevel::className(), 'targetAttribute' => ['esc_level' => 'id']],
            [['ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ticket::className(), 'targetAttribute' => ['ticket_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'esc_date_received' => 'Esc Date Received',
            'esc_time_receive' => 'Esc Time Receive',
            'esc_reason' => 'Esc Reason',
            'esc_owner' => 'Esc Owner',
            'esc_status' => 'Esc Status',
            'esc_priority' => 'Esc Priority',
            'esc_time_closed' => 'Esc Time Closed',
            'esc_date_closed' => 'Esc Date Closed',
            'ticket_id' => 'Ticket ID',
            'esc_level' => 'Esc Level',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscLevel()
    {
        return $this->hasOne(HierarchyLevel::className(), ['id' => 'esc_level']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicket()
    {
        return $this->hasOne(Ticket::className(), ['id' => 'ticket_id']);
    }
}
