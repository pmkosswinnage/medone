<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DoctoravailabiltySerach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctoravailabilty-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AvailabilityDateID') ?>

    <?= $form->field($model, 'DoctorID') ?>

    <?= $form->field($model, 'AvailableDate') ?>

    <?= $form->field($model, 'StartTime') ?>

    <?= $form->field($model, 'EndTime') ?>

    <?php // echo $form->field($model, 'Availability') ?>

    <?php // echo $form->field($model, 'AppointmentCount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
