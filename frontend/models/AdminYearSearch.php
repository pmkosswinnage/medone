<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AdminYear;

/**
 * AdminYearSearch represents the model behind the search form about `frontend\models\AdminYear`.
 */
class AdminYearSearch extends AdminYear
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'acad_year'], 'integer'],
            [['acad_status'], 'safe'],
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
        $query = AdminYear::find();

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
            'id' => $this->id,
            'acad_year' => $this->acad_year,
        ]);

        $query->andFilterWhere(['like', 'acad_status', $this->acad_status]);

        return $dataProvider;
    }
    
    
    
    
    
}
