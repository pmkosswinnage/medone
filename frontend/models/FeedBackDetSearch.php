<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FeedBackDet;

/**
 * FeedBackDetSearch represents the model behind the search form about `frontend\models\FeedBackDet`.
 */
class FeedBackDetSearch extends FeedBackDet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'feedbackhed_id'], 'integer'],
            [['feedback_ques', 'swot_cate'], 'safe'],
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
        $query = FeedBackDet::find();

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
            'feedbackhed_id' => $this->feedbackhed_id,
        ]);

        $query->andFilterWhere(['like', 'feedback_ques', $this->feedback_ques])
            ->andFilterWhere(['like', 'swot_cate', $this->swot_cate]);

        return $dataProvider;
    }
}
