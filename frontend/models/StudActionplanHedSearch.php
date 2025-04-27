<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\StudActionplanHed;

/**
 * StudActionplanHedSearch represents the model behind the search form about `frontend\models\StudActionplanHed`.
 */
class StudActionplanHedSearch extends StudActionplanHed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'acad_year_id', 'feedback_dets_id'], 'integer'],
            [['action_plan_code', 'stud_id', 'action_plan', 'review_date', 'sucess_ind', 'tutor_id', 'tutor_comments', 'tutor_com_date', 'action_satus', 'module_id', 'feedback_hed_id'], 'safe'],
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
        $query = StudActionplanHed::find();

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
            'acad_year_id' => $this->acad_year_id,
            'module_id' => $this->module_id,
            'feedback_hed_id' => $this->feedback_hed_id,
            'feedback_dets_id' => $this->feedback_dets_id,
            'review_date' => $this->review_date,
            'tutor_com_date' => $this->tutor_com_date,
        ]);

        $query->andFilterWhere(['like', 'action_plan_code', $this->action_plan_code])
            ->andFilterWhere(['like', 'stud_id', $this->stud_id])
            ->andFilterWhere(['like', 'action_plan', $this->action_plan])
            ->andFilterWhere(['like', 'sucess_ind', $this->sucess_ind])
            ->andFilterWhere(['like', 'tutor_id', $this->tutor_id])
            ->andFilterWhere(['like', 'tutor_comments', $this->tutor_comments])
            ->andFilterWhere(['like', 'action_satus', $this->action_satus]);

        return $dataProvider;
    }
    
     public function search1($params)
    {
        $query = StudActionplanHed::find()->
                where(['stud_id'=>Yii::$app->user->identity->user_id])->
                  orderBy('review_date,id DESC');;

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
            'acad_year_id' => $this->acad_year_id,
            'module_id' => $this->module_id,
            'feedback_hed_id' => $this->feedback_hed_id,
            'feedback_dets_id' => $this->feedback_dets_id,
            'review_date' => $this->review_date,
            'tutor_com_date' => $this->tutor_com_date,
        ]);

        $query->andFilterWhere(['like', 'action_plan_code', $this->action_plan_code])
            ->andFilterWhere(['like', 'stud_id', $this->stud_id])
            ->andFilterWhere(['like', 'action_plan', $this->action_plan])
            ->andFilterWhere(['like', 'sucess_ind', $this->sucess_ind])
            ->andFilterWhere(['like', 'tutor_id', $this->tutor_id])
            ->andFilterWhere(['like', 'tutor_comments', $this->tutor_comments])
            ->andFilterWhere(['like', 'action_satus', $this->action_satus]);

        return $dataProvider;
    }
    
    
     public function search2($params)
    {
        $query = StudActionplanHed::find()->
                where(['feedback_hed_id'=>$params])->
                  orderBy('review_date,id DESC');;

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
            'acad_year_id' => $this->acad_year_id,
            'module_id' => $this->module_id,
            'feedback_hed_id' => $this->feedback_hed_id,
            'feedback_dets_id' => $this->feedback_dets_id,
            'review_date' => $this->review_date,
            'tutor_com_date' => $this->tutor_com_date,
        ]);

        $query->andFilterWhere(['like', 'action_plan_code', $this->action_plan_code])
            ->andFilterWhere(['like', 'stud_id', $this->stud_id])
            ->andFilterWhere(['like', 'action_plan', $this->action_plan])
            ->andFilterWhere(['like', 'sucess_ind', $this->sucess_ind])
            ->andFilterWhere(['like', 'tutor_id', $this->tutor_id])
            ->andFilterWhere(['like', 'tutor_comments', $this->tutor_comments])
            ->andFilterWhere(['like', 'action_satus', $this->action_satus]);

        return $dataProvider;
    }
    
    
    
}
