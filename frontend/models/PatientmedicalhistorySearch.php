<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patientmedicalhistory;

/**
 * PatientmedicalhistorySearch represents the model behind the search form about `frontend\models\Patientmedicalhistory`.
 */
class PatientmedicalhistorySearch extends Patientmedicalhistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HistoryID', 'PatientID', 'DoctorID', 'AppointmentID'], 'integer'],
            [['Diagnosis', 'Treatment', 'Prescription', 'Notes', 'DateRecorded'], 'safe'],
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
        $query = Patientmedicalhistory::find();

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
            'HistoryID' => $this->HistoryID,
            'PatientID' => $this->PatientID,
            'DoctorID' => $this->DoctorID,
            'AppointmentID' => $this->AppointmentID,
            'DateRecorded' => $this->DateRecorded,
        ]);

        $query->andFilterWhere(['like', 'Diagnosis', $this->Diagnosis])
            ->andFilterWhere(['like', 'Treatment', $this->Treatment])
            ->andFilterWhere(['like', 'Prescription', $this->Prescription])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
