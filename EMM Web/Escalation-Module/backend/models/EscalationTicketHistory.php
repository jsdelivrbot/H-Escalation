<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "escalation_ticket_history".
 *
 * @property integer $id
 * @property string $heirarchy_level
 * @property string $status
 * @property string $reason
 * @property string $timestamp
 * @property integer $escalated_ticket_id
 *
 * @property EscalatedTicket $escalatedTicket
 */
class EscalationTicketHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escalation_ticket_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'escalated_ticket_id'], 'required'],
            [['id', 'escalated_ticket_id'], 'integer'],
            [['heirarchy_level', 'status', 'reason', 'timestamp'], 'string', 'max' => 45],
            [['escalated_ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => EscalatedTicket::className(), 'targetAttribute' => ['escalated_ticket_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heirarchy_level' => 'Heirarchy Level',
            'status' => 'Status',
            'reason' => 'Reason',
            'timestamp' => 'Timestamp',
            'escalated_ticket_id' => 'Escalated Ticket ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalatedTicket()
    {
        return $this->hasOne(EscalatedTicket::className(), ['id' => 'escalated_ticket_id']);
    }
}
