<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EscalatedTicket;

/**
 * EscalatedTicketSearch represents the model behind the search form about `backend\models\EscalatedTicket`.
 */
class EscalatedTicketSearch extends EscalatedTicket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'ticket_id'], 'integer'],
            [['esc_received', 'esc_closed', 'esc_limit', 'esc_status'], 'safe'],
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
            'user_id' => $this->user_id,
            'ticket_id' => $this->ticket_id,
            'esc_received' => $this->esc_received,
            'esc_closed' => $this->esc_closed,
            'esc_limit' => $this->esc_limit,
        ]);

        $query->andFilterWhere(['like', 'esc_status', $this->esc_status]);

        return $dataProvider;
    }
}
