<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bugs;

/**
 * BugsSearch represents the model behind the search form about `app\models\Bugs`.
 */
class BugsSearch extends Bugs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bug_id', 'project_id'], 'integer'],
            [['bug_name', 'bug_description', 'bug_createdDate', 'bug_status'], 'safe'],
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
        $query = Bugs::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'bug_id' => $this->bug_id,
            'bug_createdDate' => $this->bug_createdDate,
            'project_id' => $this->project_id,
        ]);

        $query->andFilterWhere(['like', 'bug_name', $this->bug_name])
            ->andFilterWhere(['like', 'bug_description', $this->bug_description])
            ->andFilterWhere(['like', 'bug_status', $this->bug_status]);

        return $dataProvider;
    }
}
