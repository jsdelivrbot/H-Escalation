<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "escalation_ticket_history".
 *
 * @property integer $id
 * @property string $hist_status
 * @property string $hist_reason
 * @property string $hist_timestamp
 * @property integer $escalated_ticket_id
 * @property integer $user_id
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
            [['id', 'hist_status', 'hist_reason', 'hist_timestamp', 'escalated_ticket_id', 'user_id'], 'required'],
            [['id', 'escalated_ticket_id', 'user_id'], 'integer'],
            [['hist_timestamp'], 'safe'],
            [['hist_status'], 'string', 'max' => 10],
            [['hist_reason'], 'string', 'max' => 100],
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
            'hist_status' => 'Hist Status',
            'hist_reason' => 'Hist Reason',
            'hist_timestamp' => 'Hist Timestamp',
            'escalated_ticket_id' => 'Escalated Ticket ID',
            'user_id' => 'User ID',
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
