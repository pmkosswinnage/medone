<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Doctoravailabilty;

/**
 * DoctoravailabiltySerach represents the model behind the search form about `frontend\models\Doctoravailabilty`.
 */
class DoctoravailabiltySerach extends Doctoravailabilty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AvailabilityDateID', 'DoctorID', 'AppointmentCount'], 'integer'],
            [['AvailableDate', 'StartTime', 'EndTime', 'Availability'], 'safe'],
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
        $query = Doctoravailabilty::find();

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
            'AvailabilityDateID' => $this->AvailabilityDateID,
            'DoctorID' => $this->DoctorID,
            'AvailableDate' => $this->AvailableDate,
            'StartTime' => $this->StartTime,
            'EndTime' => $this->EndTime,
            'AppointmentCount' => $this->AppointmentCount,
        ]);

        $query->andFilterWhere(['like', 'Availability', $this->Availability]);

        return $dataProvider;
    }
}
