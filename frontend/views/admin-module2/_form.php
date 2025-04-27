<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\AdminYear;


/* @var $this yii\web\View */
/* @var $model frontend\models\AdminModule2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-module2-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?=  $form->field($model,'mod_year')->dropDownList(
            ArrayHelper::map(AdminYear::find()->all(),'id','acad_year'),
            ['prompt'=>'Select Academic Year']
            ) ->label('Academic Year')  
            
            ?>
    

    <?= $form->field($model, 'mod_code')->textInput(['maxlength' => true])->label('Module Code') ?>

    <?= $form->field($model, 'mod_name')->textInput(['maxlength' => true]) ->label('Module Name') ?>

    <?= $form->field($model, 'mod_desc')->textarea(['rows' => 6])->label('Module Description')  ?>

    <?= $form->field($model, 'mod_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', 'Delete' => 'Delete', ], ['prompt' => 'Status'])->label('Status') ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
