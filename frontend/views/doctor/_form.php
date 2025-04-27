<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\specialization;
use common\models\user;
/* @var $this yii\web\View */
/* @var $model frontend\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model,'specialization_id')->dropDownList(
            ArrayHelper::map(specialization::find()->all(),'id','name'),
            ['prompt'=>'Select specialization']
            ) ->label('specialization')  
            
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'qualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'MaxNoPatient')->textInput() ?>

    <?= $form->field($model, 'DocFee')->textInput(['maxlength' => true]) ?>

     <?=  $form->field($model,'user_id')->dropDownList(
            ArrayHelper::map(user::find()->where(['role' =>3])->all(),'id','first_name'),
            ['prompt'=>'Select User Account']
            ) ->label('User Account')  
            
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
