<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property integer $id
 * @property string $name
 * @property integer $specialization_id
 * @property string $description
 * @property string $qualification
 * @property string $image
 * @property integer $status
 * @property integer $MaxNoPatient
 * @property string $DocFee
 * @property integer $user_id
 *
 * @property Appointments[] $appointments
 * @property Specialization $specialization
 * @property Doctoravailabilty[] $doctoravailabilties
 * @property Patientmedicalhistory[] $patientmedicalhistories
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'user_id','specialization_id','MaxNoPatient','DocFee'], 'required'],
            [['specialization_id', 'status', 'MaxNoPatient', 'user_id'], 'integer'],
            [['description'], 'string'],
            [['DocFee'], 'number'],
            [['name', 'qualification', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'specialization_id' => 'Specialization ID',
            'description' => 'Description',
            'qualification' => 'Qualification',
            'image' => 'Image',
            'status' => 'Status',
            'MaxNoPatient' => 'Max No Patient',
            'DocFee' => 'Doc Fee',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointments::className(), ['DoctorID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialization()
    {
        return $this->hasOne(Specialization::className(), ['id' => 'specialization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctoravailabilties()
    {
        return $this->hasMany(Doctoravailabilty::className(), ['DoctorID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientmedicalhistories()
    {
        return $this->hasMany(Patientmedicalhistory::className(), ['DoctorID' => 'id']);
    }


     /**
     * @return \yii\db\ActiveQuery
     */

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


}
