<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EscalatedTicket;

/**
 * EscalatedTicketSearch represents the model behind the search form about `app\models\EscalatedTicket`.
 */
class EscalatedTicketSearch extends EscalatedTicket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ticket_id', 'esc_level'], 'integer'],
            [['esc_date_received', 'esc_time_receive', 'esc_reason', 'esc_owner', 'esc_status', 'esc_priority', 'esc_time_closed', 'esc_date_closed'], 'safe'],
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
        $query = EscalatedTicket::find();

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
            'esc_date_received' => $this->esc_date_received,
            'esc_time_receive' => $this->esc_time_receive,
            'esc_time_closed' => $this->esc_time_closed,
            'esc_date_closed' => $this->esc_date_closed,
            'ticket_id' => $this->ticket_id,
            'esc_level' => $this->esc_level,
        ]);

        $query->andFilterWhere(['like', 'esc_reason', $this->esc_reason])
            ->andFilterWhere(['like', 'esc_owner', $this->esc_owner])
            ->andFilterWhere(['like', 'esc_status', $this->esc_status])
            ->andFilterWhere(['like', 'esc_priority', $this->esc_priority]);

        return $dataProvider;
    }
}
