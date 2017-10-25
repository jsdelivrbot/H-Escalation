<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ticket;

/**
 * TicketSearch represents the model behind the search form about `frontend\models\Ticket`.
 */
class TicketSearch extends Ticket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_room_no', 'ticket_type_id', 'created_by', 'assigned_to', 'closed_by'], 'integer'],
            [['tick_request', 'tick_priority', 'tick_others', 'tick_timelimit', 'tick_startDate', 'tick_status', 'tick_closed_date', 'tick_item'], 'safe'],
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
            'tick_timelimit' => $this->tick_timelimit,
            'tick_startDate' => $this->tick_startDate,
            'tick_closed_date' => $this->tick_closed_date,
            'room_room_no' => $this->room_room_no,
            'ticket_type_id' => $this->ticket_type_id,
            'created_by' => $this->created_by,
            'assigned_to' => $this->assigned_to,
            'closed_by' => $this->closed_by,
        ]);

        $query->andFilterWhere(['like', 'tick_request', $this->tick_request])
            ->andFilterWhere(['like', 'tick_priority', $this->tick_priority])
            ->andFilterWhere(['like', 'tick_others', $this->tick_others])
            ->andFilterWhere(['like', 'tick_status', $this->tick_status])
            ->andFilterWhere(['like', 'tick_item', $this->tick_item]);

        return $dataProvider;
    }
}
