<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ticket;

/**
 * TicketSearch represents the model behind the search form about `backend\models\Ticket`.
 */
class TicketSearch extends Ticket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tick_escalate', 'ticket_type_id', 'department_id', 'room_room_no', 'user_id'], 'integer'],
            [['tick_closed_time', 'tick_date', 'description', 'timelimit', 'status', 'priority'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ticket::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tick_closed_time' => $this->tick_closed_time,
            'tick_date' => $this->tick_date,
            'tick_escalate' => $this->tick_escalate,
            'timelimit' => $this->timelimit,
            'ticket_type_id' => $this->ticket_type_id,
            'department_id' => $this->department_id,
            'room_room_no' => $this->room_room_no,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
