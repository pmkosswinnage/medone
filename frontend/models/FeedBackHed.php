<?php

namespace frontend\models;

use Yii;
Use common\models\user;
/**
 * This is the model class for table "feed_back_hed".
 *
 * @property integer $id
 * @property string $feedback_name
 * @property integer $acad_year_id
 * @property integer $module_id
 * @property string $feedback_status
 *
 * @property FeedBackDetails[] $feedBackDetails
 * @property AdminModule2 $module
 * @property AdminYear $acadYear
 */
class FeedBackHed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feed_back_hed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['feedback_name', 'acad_year_id', 'module_id', 'feedback_status'], 'required'],
            [['acad_year_id', 'module_id'], 'integer'],
            [['feedback_status','user_id'], 'string'],
            [['feedback_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'feedback_name' => 'Feedback Name',
            'acad_year_id' => 'Academic Year',
            'module_id' => 'Module Name',
            'feedback_status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbackdetails()
    {
        return $this->hasMany(FeedBackDetails::className(), ['feedbackhed_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(AdminModule2::className(), ['id' => 'module_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcadYear()
    {
        return $this->hasOne(AdminYear::className(), ['id' => 'acad_year_id']);
    }
    
    
     public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
    
}
