<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AppointmentsSerach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AppointmentID') ?>

    <?= $form->field($model, 'PatientID') ?>

    <?= $form->field($model, 'DoctorID') ?>

    <?= $form->field($model, 'AppointmentDate') ?>

    <?= $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
