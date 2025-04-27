<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminModule2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-module2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mod_code') ?>

    <?= $form->field($model, 'mod_name') ?>

    <?= $form->field($model, 'mod_desc') ?>

    <?= $form->field($model, 'mod_status') ?>

    <?php // echo $form->field($model, 'mod_year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
