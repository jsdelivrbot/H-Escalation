<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "escalated_ticket".
 *
 * @property integer $id
 * @property string $esc_date_received
 * @property string $esc_time_received
 * @property string $esc_reason
 * @property string $esc_owner
 * @property string $esc_status
 * @property string $esc_priority
 * @property string $esc_time_closed
 * @property string $esc_date_closed
 * @property integer $hierarchy_level_id
 * @property integer $ticket_id
 * @property string $timelimit
 *
 * @property HierarchyLevel $hierarchyLevel
 * @property Ticket $ticket
 * @property EscalationTicketHistory[] $escalationTicketHistories
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
            [['esc_date_received', 'esc_time_received', 'esc_reason', 'esc_owner', 'esc_status', 'esc_priority', 'esc_time_closed', 'esc_date_closed', 'hierarchy_level_id', 'ticket_id'], 'required'],
            [['esc_date_received', 'esc_time_received', 'esc_time_closed', 'esc_date_closed'], 'safe'],
            [['hierarchy_level_id', 'ticket_id'], 'integer'],
            [['esc_reason'], 'string', 'max' => 50],
            [['esc_owner', 'timelimit'], 'string', 'max' => 45],
            [['esc_status', 'esc_priority'], 'string', 'max' => 10],
            [['hierarchy_level_id'], 'exist', 'skipOnError' => true, 'targetClass' => HierarchyLevel::className(), 'targetAttribute' => ['hierarchy_level_id' => 'id']],
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
            'esc_time_received' => 'Esc Time Received',
            'esc_reason' => 'Esc Reason',
            'esc_owner' => 'Esc Owner',
            'esc_status' => 'Esc Status',
            'esc_priority' => 'Esc Priority',
            'esc_time_closed' => 'Esc Time Closed',
            'esc_date_closed' => 'Esc Date Closed',
            'hierarchy_level_id' => 'Hierarchy Level ID',
            'ticket_id' => 'Ticket ID',
            'timelimit' => 'Timelimit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHierarchyLevel()
    {
        return $this->hasOne(HierarchyLevel::className(), ['id' => 'hierarchy_level_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicket()
    {
        return $this->hasOne(Ticket::className(), ['id' => 'ticket_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalationTicketHistories()
    {
        return $this->hasMany(EscalationTicketHistory::className(), ['escalated_ticket_id' => 'id']);
    }
}
