<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientmedicalhistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patientmedicalhistory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HistoryID') ?>

    <?= $form->field($model, 'PatientID') ?>

    <?= $form->field($model, 'DoctorID') ?>

    <?= $form->field($model, 'AppointmentID') ?>

    <?= $form->field($model, 'Diagnosis') ?>

    <?php // echo $form->field($model, 'Treatment') ?>

    <?php // echo $form->field($model, 'Prescription') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <?php // echo $form->field($model, 'DateRecorded') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
