<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\AdminYear;
Use frontend\models\AdminModule2;
use frontend\models\FeedBackHed;
use frontend\models\FeedBackDet;
use frontend\models\FeedBackHedSearch;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;



/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stud-actionplan-hed-form">

    <?php $form = ActiveForm::begin(); ?>
    
     
    <?= $form->field($model, 'feedback_hed_id')->dropDownList( 
                ArrayHelper::map(FeedBackHed::find()
                ->where(['user_id' =>Yii::$app->user->identity->user_id,'feedback_status'=>'Active'])
                ->all(),'id','feedback_name'),
              [
                  'prompt'=>'Select Feed Back File',
                  'id'=>'feefile',
                   'onchange'=>'
                   $.post( "index.php?r=feed-back-hed/get_feedpoints&feedqid='.'"+$(this).val(), function( data ) {
                   $( "select#feedques" ).html( data );
                   });'    
                             
                  
              ]); ?>
    
     <?= $form->field($model, 'feedback_dets_id')->dropDownList(
                                ArrayHelper::map(FeedBackDet::find()->all(), 'id', 'feedback_ques'),
           
                                [
                                    'prompt'=>'Select Weeknes Point','id'=>'feedques'
                                                                                          
                                ]); ?>
    

  <?= $form->field($model,'acad_year_id')->textInput() ?>
    
    
   <?= $form->field($model,'module_id')->dropDownList(
           ArrayHelper::map(AdminModule2::find()->all(), 'id', 'mod_name'),
                                [
                                    'prompt'=>'Select Module Name',
                                                                                          
                                ]); ?>
    

       
    
  
    <?= $form->field($model, 'action_plan')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'review_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <?= $form->field($model, 'sucess_ind')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'action_satus')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', 'Delete' => 'Delete', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script= <<<JS
     
    $('#feefile').change(function(){
        var feedid=$(this).val();       
        
           $.get('index.php?r=feed-back-hed/get_feedmodule',{feedid:feedid},function(data){
              //alert(data);  
              var obj = $.parseJSON(data);
              //var data=$.parseJSON(data);
               $("#studactionplanhed-module_id").empty();
                 //alert(data);  
                
                    $("#studactionplanhed-module_id").append("<option value="+obj.id+">"+obj.mod_name+"</option>");
                    
              
            }); 
     
    });      
    
        $('#feefile').change(function(){
        var feedid=$(this).val();
        //alert(feedid); 
        $.get('index.php?r=feed-back-hed/get_feedyear',{feedid:feedid},function(data){
              //alert(data);  
               var data=$.parseJSON(data);
               $('#studactionplanhed-acad_year_id').attr('value',data.	acad_year);
            }); 
        });    
      
        
//       $('#feefile').change(function(){
//        var feedid=$(this).val();       
//         //alert('myscript3');      
//           $.get('index.php?r=feed-back-hed/get_feedpoints',{feedid:feedid},function(data)
//            {
//                alert(data); 
//                var data = $.parseJSON(data);
//                var obj = eval(data);
//                $("#feedques").empty(); 
//                
//                 $.each(obj, function(id, feedback_ques) {
//	                 $("#feedques").append("<option value="+data.id+">"+data.feedback_ques+"</option>");
//	              });
//                
//                //$("#feedques").append("<option value="+obj.id+">"+data.feedback_ques+"</option>");
//            
//                  
//                
//             });   
//        });
//   
        
                 
        
        
      
        
        
        
        
        
   
JS;
$this->registerJs($script);
?>