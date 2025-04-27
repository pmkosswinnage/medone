<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patientmedicalhistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patientmedicalhistory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PatientID')->textInput() ?>

    <?= $form->field($model, 'DoctorID')->textInput() ?>

    <?= $form->field($model, 'AppointmentID')->textInput() ?>

    <?= $form->field($model, 'Diagnosis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Treatment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Prescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DateRecorded')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
