<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminYear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-year-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'acad_year')->textInput()->label('Academic Year') ?>

    <?= $form->field($model, 'acad_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', 'Delete' => 'Delete', ], ['prompt' => 'Status'])->label('Status') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
