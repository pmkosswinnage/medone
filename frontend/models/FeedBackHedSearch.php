<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FeedBackHed;


/**
 * FeedBackHedSearch represents the model behind the search form about `frontend\models\FeedBackHed`.
 */
class FeedBackHedSearch extends FeedBackHed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', ], 'integer'],
            [['feedback_name', 'acad_year_id','module_id','feedback_status','user_id'], 'safe'],
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
        $query = FeedBackHed::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('acadYear');

        $query->andFilterWhere([
            'id' => $this->id,
            //'acad_year_id' => $this->acad_year_id,
              'module_id' => $this->module_id,
        ]);

        $query->andFilterWhere(['like', 'feedback_name', $this->feedback_name])
            ->andFilterWhere(['like', 'feedback_status', $this->feedback_status])
           ->andFilterWhere(['like', 'acad_year', $this->acad_year_id])
           ->andFilterWhere(['like', 'user_id', $this->user_id]);
            
           // ->andFilterWhere(['like', 'module.mod_name', $this->module_id])   ;
        return $dataProvider;
    }
    
    
    
    public function search1($params)
    {
        $query = FeedBackHed::find()->
            where(['user_id'=>Yii::$app->user->identity->user_id])->
                  orderBy('acad_year_id,module_id DESC');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('acadYear');

        $query->andFilterWhere([
            'id' => $this->id,
            //'acad_year_id' => $this->acad_year_id,
              'module_id' => $this->module_id,
        ]);

        $query->andFilterWhere(['like', 'feedback_name', $this->feedback_name])
            ->andFilterWhere(['like', 'feedback_status', $this->feedback_status])
           ->andFilterWhere(['like', 'acad_year', $this->acad_year_id])
           ->andFilterWhere(['like', 'user_id', $this->user_id]);
        
             // ->andFilterWhere(['like', 'module.mod_name', $this->module_id])   ;
        return $dataProvider;
        
    }
    
  
    public function search2($params)
    {
        $query = FeedBackHed::find()->
            where(['feedback_status'=>'Active'])->
                  orderBy('acad_year_id,module_id DESC');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('acadYear');

        $query->andFilterWhere([
            'id' => $this->id,
            //'acad_year_id' => $this->acad_year_id,
              'module_id' => $this->module_id,
        ]);

        $query->andFilterWhere(['like', 'feedback_name', $this->feedback_name])
            ->andFilterWhere(['like', 'feedback_status', $this->feedback_status])
           ->andFilterWhere(['like', 'acad_year', $this->acad_year_id])
           ->andFilterWhere(['like', 'user_id', $this->user_id]);
        
             // ->andFilterWhere(['like', 'module.mod_name', $this->module_id])   ;
        return $dataProvider;
        
    } 
    
    
    
    
    
    
    
}
