<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HierarchyLevel;

/**
 * HierarchyLevelSearch represents the model behind the search form about `app\models\HierarchyLevel`.
 */
class HierarchyLevelSearch extends HierarchyLevel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'department1_id'], 'integer'],
            [['level_num'], 'safe'],
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
        $query = HierarchyLevel::find();

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
            'department1_id' => $this->department1_id,
        ]);

        $query->andFilterWhere(['like', 'level_num', $this->level_num]);

        return $dataProvider;
    }
}
