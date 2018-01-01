<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee1;

/**
 * Employee1Search represents the model behind the search form about `app\models\Employee1`.
 */
class Employee1Search extends Employee1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_num', 'dept_id', 'pos_id'], 'integer'],
            [['emp_fname', 'emp_mname', 'emp_lname', 'emp_contact_no'], 'safe'],
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
        $query = Employee1::find();

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
            'emp_num' => $this->emp_num,
            'dept_id' => $this->dept_id,
            'pos_id' => $this->pos_id,
        ]);

        $query->andFilterWhere(['like', 'emp_fname', $this->emp_fname])
            ->andFilterWhere(['like', 'emp_mname', $this->emp_mname])
            ->andFilterWhere(['like', 'emp_lname', $this->emp_lname])
            ->andFilterWhere(['like', 'emp_contact_no', $this->emp_contact_no]);

        return $dataProvider;
    }
}
