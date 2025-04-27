<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AdminModule2;

/**
 * AdminModule2Search represents the model behind the search form about `frontend\models\AdminModule2`.
 */
class AdminModule2Search extends AdminModule2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mod_year'], 'integer'],
            [['mod_code', 'mod_name', 'mod_desc', 'mod_status'], 'safe'],
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
        $query = AdminModule2::find();

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
            'mod_year' => $this->mod_year,
        ]);

        $query->andFilterWhere(['like', 'mod_code', $this->mod_code])
            ->andFilterWhere(['like', 'mod_name', $this->mod_name])
            ->andFilterWhere(['like', 'mod_desc', $this->mod_desc])
            ->andFilterWhere(['like', 'mod_status', $this->mod_status]);

        return $dataProvider;
    }
}
