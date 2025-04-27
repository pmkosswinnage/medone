<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "appointments".
 *
 * @property integer $AppointmentID
 * @property integer $PatientID
 * @property integer $DoctorID
 * @property string $AppointmentDate
 * @property string $Status
 *
 * @property Doctoravailabilty $appointmentDate
 * @property Doctor $doctor
 * @property Patients $patient
 * @property Patientmedicalhistory[] $patientmedicalhistories
 */
class Appointments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PatientID', 'DoctorID', 'AppointmentDate'], 'required'],
            [['PatientID', 'DoctorID'], 'integer'],
            [['AppointmentDate'], 'safe'],
            [['Status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AppointmentID' => 'Appointment ID',
            'PatientID' => 'Patient ID',
            'DoctorID' => 'Doctor ID',
            'AppointmentDate' => 'Appointment Date',
            'Status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointmentDate()
    {
        return $this->hasOne(Doctoravailabilty::className(), ['AvailableDate' => 'AppointmentDate']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientmedicalhistories()
    {
        return $this->hasMany(Patientmedicalhistory::className(), ['AppointmentID' => 'AppointmentID']);
    }
}
