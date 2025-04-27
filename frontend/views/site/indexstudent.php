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
<div class="site-indexstudent">
     
    <div class="row">
    <div class="col-md-4">
                
    <div class="box box-solid bg-light-blue-gradient">
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
                  
                 
                 
<!--                  <div id="world-map" style="height: 250px; width: 100%;"></div>-->
                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                   <?=$url = Html::a('View Academic Module Details',
                        ['/admin-module2/viewindex'],
                        ['class' => 'btn btn-success', 'data-method'=>'post']);?>
                    
<!--                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div id="sparkline-1"></div>
                      <div class="knob-label">Visitors</div>
                    </div> ./col 
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div id="sparkline-2"></div>
                      <div class="knob-label">Online</div>
                    </div> ./col 
                    <div class="col-xs-4 text-center">
                      <div id="sparkline-3"></div>
                      <div class="knob-label">Exists</div>
                    </div> ./col 
                  </div> /.row -->
                </div>
              </div>
              <!-- /.box -->
         </div>      
              
        <div class="col-md-8"> 
              
           <div class="box box-solid bg-maroon disabled color-palette">
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
                      <?php
                       {
                       $myfeedback=FeedBackHed::find()
                                ->where(['user_id' =>Yii::$app->user->identity->user_id,'feedback_status'=>'Active'])
                                ->all();  
                                    
                                         {foreach ($myfeedback as $myfeedback1) 
                                         {
                                            $moduleyear=AdminYear::findone($myfeedback1->acad_year_id);
                                            $modulename=AdminModule2::findone($myfeedback1->module_id);
                                             
                                             
                                            echo '<font size="4"><b>'.$myfeedback1->feedback_name.
                                                    '      -->   '.$modulename->mod_name.
                                                    '      (   '.$moduleyear->acad_year.
                                                    
                                                    ' )</b></font><br><br>';
                                         } 
                                         }
                          }                 
                     
                  ?>              
                          
                 

                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-md-8">
                            
                            
                            <?php $form = ActiveForm::begin(); ?>
                              
                            <?Php
                               
                               $feedbacklist =new FeedBackHed;
                                                           
                              echo $form->field($feedbacklist, 'id')->dropDownList( 
                                 ArrayHelper::map(FeedBackHed::find()
                                ->where(['user_id' =>Yii::$app->user->identity->user_id,'feedback_status'=>'Active'])
                                ->all(),'id','feedback_name'),
                                [
                                    'prompt'=>'Select Feed Back File',
                                    'id'=>'feedlistid',
                                     
                                     
                                ]); 
                                                                                   
                              
                                                          
                                echo $url = Html::a('View SWOT Analysis and Action Plan',
                                 ['/site/sowtanalysis','studid'=>Yii::$app->user->identity->user_id],
                                 ['class' => 'btn btn-success', 'data-method'=>'post']);    
                                                             
                            ?>
                    
                            <?php ActiveForm::end(); ?>
                            
                        </div>
                        
                        <div class="col-md-4">
                          <div class="box-footer no-border">
                           <br> 
                           <br>
                            <br>
                            <?=$url = Html::a('View Feed Back Forms',
                                ['/feed-back-hed/index'],
                                ['class' => 'btn btn-success', 'data-method'=>'post']);?>
                    
                           </div>
                            
                         </div>  
                        
                        
                    </div>     
              </div>
              </div>
              <!-- /.box -->
            
            
            
            
            
        </div>                 
     </div>         
              
    
    
</div>
