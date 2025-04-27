<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Userinit;

/**
 * UserinitSearch represents the model behind the search form about `frontend\models\Userinit`.
 */
class UserinitSearch extends Userinit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'srole'], 'integer'],
            [['suser_id'], 'safe'],
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
        $query = Userinit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'srole' => $this->srole,
        ]);

        $query->andFilterWhere(['like', 'suser_id', $this->suser_id]);

        return $dataProvider;
    }
    
   
    
}
