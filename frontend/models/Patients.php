<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property integer $PatientsID
 * @property string $Title
 * @property string $FirstName
 * @property string $LastName
 * @property string $DateOfBirth
 * @property string $Gender
 * @property string $ContactNumber
 * @property string $Email
 * @property string $Address
 * @property integer $User_id
 *
 * @property Appointments[] $appointments
 * @property Patientmedicalhistory[] $patientmedicalhistories
 * @property User $user
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Title', 'Gender', 'Address'], 'string'],
            [['DateOfBirth'], 'safe'],
            [['User_id'], 'required'],
            [['User_id'], 'integer'],
            [['FirstName', 'LastName'], 'string', 'max' => 50],
            [['ContactNumber'], 'string', 'max' => 15],
            [['Email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PatientsID' => 'Patients ID',
            'Title' => 'Title',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'DateOfBirth' => 'Date Of Birth',
            'Gender' => 'Gender',
            'ContactNumber' => 'Contact Number',
            'Email' => 'Email',
            'Address' => 'Address',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointments::className(), ['PatientID' => 'PatientsID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientmedicalhistories()
    {
        return $this->hasMany(Patientmedicalhistory::className(), ['PatientID' => 'PatientsID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_id']);
    }
}
