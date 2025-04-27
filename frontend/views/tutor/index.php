<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
Use frontend\models\AdminModule2;
use frontend\models\AdminYear;
use frontend\models\FeedBackHed;
use yii\helpers\ArrayHelper;
$this->title = 'MED-One.com';

?>
<div class="tutor-index">
     
    <div class="row">
    <div class="col-md-4">
                
    <div class="box box-solid bg-aqua color-palette">
                <div class="box-header">
                  <!-- tools box -->
                  <div class="pull-right box-tools">
<!--                    <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>-->
                    <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->

                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    
                    <?php
                    Echo 'Academic Year and Modules'. $searchModel->acad_year;
                                        
                    ?>
                  </h3>
                </div>
                <div class="box-body">
                                       
                     <?php
                        $activeYear=AdminYear::find()
                                ->where(['acad_status'=>'Active'])
                                ->all();  
                     
                     
                        foreach ($activeYear as $activeYearl) 
                    {     echo "<div> <h3>{$activeYearl->acad_year} </h3>"."{$activeYearl->acad_status}</div> <br>";
                                {
                                 $mymodules=AdminModule2::find()
                                ->where(['mod_year' =>$activeYearl->id,'mod_status'=>'Active'])
                                ->all();  
                                    
                                         {foreach ($mymodules as $model1) 
                                         {
                                            echo '<font size="4"><b>'.$model1->mod_name.'</b></font><br>';
                                         } 
                                         }
                                }
                         
                    }
                    ?>
                  
                           
                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                   <?=$url = Html::a('View Academic Module Details',
                        ['/admin-module2/viewindex'],
                        ['class' => 'btn btn-success', 'data-method'=>'post']);?>
                    

                </div>
              </div>
              <!-- /.box -->
         </div>      
              
        <div class="col-md-8"> 
              
           <div class="box box-solid bg-red disabled color-palette">
                <div class="box-header">
                  <!-- tools box -->
                  <div class="pull-right box-tools">
<!--                    <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>-->
                    <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->

                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    
                    <?php
                    Echo 'Feed Back Form and Action Plan'. $searchModel->acad_year;
                                        
                    ?>
                  </h3>
                </div>
                <div class="box-body">
                      
                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-md-8">
                            
                            
                            <?php $form = ActiveForm::begin(); ?>
                              
                            <?Php
                               
                               $feedbacklist =new FeedBackHed;
                                                           
                              echo $form->field($feedbacklist, 'id')->dropDownList( 
                                 ArrayHelper::map(FeedBackHed::find()
                                ->where(['feedback_status'=>'Active'])
                                ->all(),'id','feedback_name'),
                                [
                                    'prompt'=>'Select Feed Back File',
                                    'id'=>'feedlistid',
                                     
                                     
                                ]); 
                                                
                                                          
                                echo $url = Html::a('Student Feed-Back SWOT Analysis and Action Plan',
                                 ['/tutor/feedbacklist'],
                                 ['class' => 'btn btn-success', 'data-method'=>'post']);    
                                                             
                            ?>
                    
                            <?php ActiveForm::end(); ?>
                            
                        </div>
                        
                        <div class="col-md-4">
                                                      
                         </div>  
                        
                        
                    </div>     
              </div>
              </div>
              <!-- /.box -->
            
            
            
            
            
        </div>                 
     </div>         
              
    
    
</div>