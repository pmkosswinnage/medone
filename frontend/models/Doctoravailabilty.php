<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctoravailabilty".
 *
 * @property integer $AvailabilityDateID
 * @property integer $DoctorID
 * @property string $AvailableDate
 * @property string $StartTime
 * @property string $EndTime
 * @property string $Availability
 * @property integer $AppointmentCount
 *
 * @property Appointments[] $appointments
 * @property Doctor $doctor
 */
class Doctoravailabilty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctoravailabilty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DoctorID', 'AvailableDate', 'StartTime', 'EndTime', 'AppointmentCount'], 'required'],
            [['DoctorID', 'AppointmentCount'], 'integer'],
            [['AvailableDate', 'StartTime', 'EndTime'], 'safe'],
            [['Availability'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AvailabilityDateID' => 'Availability Date ID',
            'DoctorID' => 'Doctor ID',
            'AvailableDate' => 'Available Date',
            'StartTime' => 'Start Time',
            'EndTime' => 'End Time',
            'Availability' => 'Availability',
            'AppointmentCount' => 'Appointment Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointments::className(), ['AppointmentDate' => 'AvailableDate']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctor::className(), ['id' => 'DoctorID']);
    }
}
