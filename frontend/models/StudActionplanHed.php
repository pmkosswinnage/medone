<?php

namespace frontend\models;

use Yii;
Use common\models\user;

/**
 * This is the model class for table "stud_actionplan_hed".
 *
 * @property integer $id
 * @property integer $acad_year_id
 * @property integer $module_id
 * @property integer $feedback_hed_id
 * @property integer $feedback_dets_id
 * @property string $action_plan_code
 * @property string $stud_id
 * @property string $action_plan
 * @property string $review_date
 * @property string $sucess_ind
 * @property string $tutor_id
 * @property string $tutor_comments
 * @property string $tutor_com_date
 * @property string $action_satus
 *
 * @property FeedBackDet $feedbackDets
 * @property AdminYear $acadYear
 * @property AdminModule2 $module
 * @property FeedBackHed $feedbackHed
 */
class StudActionplanHed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stud_actionplan_hed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acad_year_id', 'module_id', 'feedback_hed_id', 'feedback_dets_id', 'action_plan_code', 'stud_id', 'action_plan', 'review_date', 'sucess_ind', 'action_satus'], 'required'],
            [['acad_year_id', 'module_id', 'feedback_hed_id', 'feedback_dets_id'], 'integer'],
            [['action_plan', 'sucess_ind', 'tutor_comments', 'action_satus'], 'string'],
            [['review_date', 'tutor_com_date'], 'safe'],
            [['action_plan_code', 'stud_id', 'tutor_id'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acad_year_id' => 'Academic Year',
            'module_id' => 'Module Name',
            'feedback_hed_id' => 'Feed-Back Name',
            'feedback_dets_id' => 'Areas to Improve',
            'action_plan_code' => 'Action Plan Code',
            'stud_id' => 'Student ID',
            'action_plan' => 'Action Plan',
            'review_date' => 'Review Date',
            'sucess_ind' => 'Success Indicators',
            'tutor_id' => 'Tutor',
            'tutor_comments' => 'Tutor Comments',
            'tutor_com_date' => 'Tutor Comments Date',
            'action_satus' => 'Action Satus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbackDets()
    {
        return $this->hasOne(FeedBackDet::className(), ['id' => 'feedback_dets_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcadYear()
    {
        return $this->hasOne(AdminYear::className(), ['id' => 'acad_year_id']);
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
    public function getFeedbackHed()
    {
        return $this->hasOne(FeedBackHed::className(), ['id' => 'feedback_hed_id']);
    }
    
    
    public function getStudentinfo()
    {
        return $this->hasOne(user::className(), ['user_id' => 'stud_id']);
    }
    
}
