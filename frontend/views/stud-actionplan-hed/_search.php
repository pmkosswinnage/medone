<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stud-actionplan-hed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'acad_year_id') ?>

    <?= $form->field($model, 'module_id') ?>

    <?= $form->field($model, 'feedback_hed_id') ?>

    <?= $form->field($model, 'feedback_dets_id') ?>

    <?php // echo $form->field($model, 'action_plan_code') ?>

    <?php // echo $form->field($model, 'stud_id') ?>

    <?php // echo $form->field($model, 'action_plan') ?>

    <?php // echo $form->field($model, 'review_date') ?>

    <?php // echo $form->field($model, 'sucess_ind') ?>

    <?php // echo $form->field($model, 'tutor_id') ?>

    <?php // echo $form->field($model, 'tutor_comments') ?>

    <?php // echo $form->field($model, 'tutor_com_date') ?>

    <?php // echo $form->field($model, 'action_satus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
