<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Appointments;

/**
 * AppointmentsSerach represents the model behind the search form about `frontend\models\Appointments`.
 */
class AppointmentsSerach extends Appointments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppointmentID', 'PatientID', 'DoctorID'], 'integer'],
            [['AppointmentDate', 'Status'], 'safe'],
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
        $query = Appointments::find();

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
            'AppointmentID' => $this->AppointmentID,
            'PatientID' => $this->PatientID,
            'DoctorID' => $this->DoctorID,
            'AppointmentDate' => $this->AppointmentDate,
        ]);

        $query->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
