<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patientmedicalhistory".
 *
 * @property integer $HistoryID
 * @property integer $PatientID
 * @property integer $DoctorID
 * @property integer $AppointmentID
 * @property string $Diagnosis
 * @property string $Treatment
 * @property string $Prescription
 * @property string $Notes
 * @property string $DateRecorded
 *
 * @property Appointments $appointment
 * @property Doctor $doctor
 * @property Patients $patient
 */
class Patientmedicalhistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patientmedicalhistory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PatientID', 'DoctorID', 'AppointmentID'], 'required'],
            [['PatientID', 'DoctorID', 'AppointmentID'], 'integer'],
            [['Diagnosis', 'Treatment', 'Prescription', 'Notes'], 'string'],
            [['DateRecorded'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HistoryID' => 'History ID',
            'PatientID' => 'Patient ID',
            'DoctorID' => 'Doctor ID',
            'AppointmentID' => 'Appointment ID',
            'Diagnosis' => 'Diagnosis',
            'Treatment' => 'Treatment',
            'Prescription' => 'Prescription',
            'Notes' => 'Notes',
            'DateRecorded' => 'Date Recorded',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointment()
    {
        return $this->hasOne(Appointments::className(), ['AppointmentID' => 'AppointmentID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctor::className(), ['id' => 'DoctorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patients::className(), ['PatientsID' => 'PatientID']);
    }
}
