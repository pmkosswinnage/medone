<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "feed_back_det".
 *
 * @property integer $id
 * @property integer $feedbackhed_id
 * @property string $feedback_ques
 * @property string $swot_cate
 *
 * @property FeedBackHed $feedbackhed
 */
class FeedBackDet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feed_back_det';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['feedback_ques', 'swot_cate'], 'required'],
            [['feedbackhed_id'], 'integer'],
            [['swot_cate'], 'string'],
            [['feedback_ques'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'feedbackhed_id' => 'Feedbackhed ID',
            'feedback_ques' => 'My Feed-Back',
            'swot_cate' => 'SWOT Analysis Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbackhed()
    {
        return $this->hasOne(FeedBackHed::className(), ['id' => 'feedbackhed_id']);
    }
}
