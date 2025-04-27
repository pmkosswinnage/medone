<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Doctoravailabilty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctoravailabilty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DoctorID')->textInput() ?>

    <?= $form->field($model, 'AvailableDate')->textInput() ?>

    <?= $form->field($model, 'StartTime')->textInput() ?>

    <?= $form->field($model, 'EndTime')->textInput() ?>

    <?= $form->field($model, 'Availability')->dropDownList([ 'Off-Day' => 'Off-Day', 'Work-Day' => 'Work-Day', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'AppointmentCount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
