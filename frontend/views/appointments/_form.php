<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Appointments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PatientID')->textInput() ?>

    <?= $form->field($model, 'DoctorID')->textInput() ?>

    <?= $form->field($model, 'AppointmentDate')->textInput() ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Scheduled' => 'Scheduled', 'Started' => 'Started', 'Completed' => 'Completed', 'Cancelled' => 'Cancelled', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
