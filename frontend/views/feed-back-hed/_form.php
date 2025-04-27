<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\AdminYear;
Use frontend\models\AdminModule2;    
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feed-back-hed-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'feedback_name')->textInput(['maxlength' => true]) ?>

      
    <?= $form->field($model,'acad_year_id')->dropDownList(
                                ArrayHelper::map( AdminYear::find()->all(), 'id', 'acad_year'),
                                [
                                    'prompt'=>'Select Academic Year',
                                    'onchange'=>'
                                        $.post( "index.php?r=admin-module2/lists&id='.'"+$(this).val(), function( data ) {
                                            $( "select#feedbackhed-module_id" ).html( data );
                                        });'
                                ]); ?>
    
    
    <?= $form->field($model,'module_id')->dropDownList(
                                ArrayHelper::map(AdminModule2::find()->all(), 'id', 'mod_name'),
                                [
                                    'prompt'=>'Select Module Name',
                                ]); ?>


    <?= $form->field($model, 'feedback_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', 'Delete' => 'Delete', ], ['prompt' => '']) ?>
    
    <div class="row">
        
                    <div class="panel panel-default">
                    <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Feed Back Details (Max:40 Quiz)</h4></div>
                    <div class="panel-body">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                        'widgetBody' => '.container-items', // required: css class selector
                        'widgetItem' => '.item', // required: css class
                        'limit' => 40, // the maximum times, an element can be cloned (default 999)
                        'min' => 1, // 0 or 1 (default 1)
                        'insertButton' => '.add-item', // css class
                        'deleteButton' => '.remove-item', // css class
                        'model' => $modelsfeedbkdet[0],
                        'formId' => 'dynamic-form',
                        'formFields' => [
                            'feedback_ques',
                            'swot_cate',
                        ],
                    ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsfeedbkdet as $i => $modelsfeedbkdet): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Feed Back Details</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelsfeedbkdet->isNewRecord) {
                                echo Html::activeHiddenInput($modelsfeedbkdet, "[{$i}]id");
                            }
                        ?>
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelsfeedbkdet, "[{$i}]feedback_ques")->textInput(['maxlength' => true])->label('Feed-Back') ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelsfeedbkdet, "[{$i}]swot_cate")->dropDownList([ 'strengths' => 'Strengths', 'weaknesses' => 'Weaknesses', 'opportunities' => 'Opportunities', 'threats' => 'Threats', ], ['prompt' => 'Select SWOT'])->label('SWOT Analysis Category') ?>
                            </div>
                        </div><!-- .row -->
                        
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
        </div>    
   
    </div>
         
    
    
    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
