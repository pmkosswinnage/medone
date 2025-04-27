<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Doctor;

/**
 * DoctorSerach represents the model behind the search form about `frontend\models\Doctor`.
 */
class DoctorSerach extends Doctor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'MaxNoPatient', 'user_id'], 'integer'],
            [['name', 'description', 'qualification', 'image','specialization_id'], 'safe'],
            [['DocFee'], 'number'],
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
        $query = Doctor::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

         $query->joinwith('specialization');


        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'MaxNoPatient' => $this->MaxNoPatient,
            'DocFee' => $this->DocFee,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'Doctor.name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'qualification', $this->qualification])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'specialization.name', $this->specialization_id]);

        return $dataProvider;
    }
}
