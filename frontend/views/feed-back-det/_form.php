<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackDet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feed-back-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'feedbackhed_id')->textInput() ?>

    <?= $form->field($model, 'feedback_ques')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'swot_cate')->dropDownList([ 'strengths' => 'Strengths', 'weaknesses' => 'Weaknesses', 'opportunities' => 'Opportunities', 'threats' => 'Threats', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
