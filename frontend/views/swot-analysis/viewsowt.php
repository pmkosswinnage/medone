<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use frontend\models\FeedBackDet;


/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHed */

$this->title = $model->feedback_name;
$this->params['breadcrumbs'][] = ['label' => 'Feed-Back Forms', 'url' => ['/site/sowtanalysis','studid'=>Yii::$app->user->identity->user_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-hed-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            ['label' => 'Academic Year',
             'attribute'=> 'acadYear.acad_year',] ,
            
            ['label' => 'Module Name',
             'attribute'=> 'module.mod_name',] ,
            
            ['label' => 'Feedback Name',
             'attribute'=> 'feedback_name',] ,
            
            ['label' => 'Status',
             'attribute'=> 'feedback_status',] ,
           
            
        ],
    ]) ?>

<h3>SWOT ANALYSIS</h3>

    <!--       strength -->
      <div class=".col-xs-6">
                <div class="box box-solid bg-green disabled color-palette">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                        </div><!-- /. tools -->

                        <i class="fa fa-map-marker"></i>
                        <h3 class="box-title">
                    
                            <?php
                            Echo 'Strengths Points';

                            ?>
                       </h3>
                    </div>
                    
                    <div class="box-body">

                         <?php
                            $Strengths=FeedBackDet::find()
                                    ->where(['feedbackhed_id'=>$model->id,'swot_cate'=>'strengths'])
                                    ->all();  

                         echo '<ul style="list-style-type:square">';
                            foreach ($Strengths as $Strengthsl) 
                        {     echo '<li>  '.$Strengthsl->feedback_ques. '<br><br>';

                        }
                        echo '</ul>';
                        ?>
                    </div><!-- /.box-body-->
                    
                   
              </div>
              <!-- /.box -->
            </div>  
         
     
      
    
      <div class=".col-xs-6">
    
          <div class="box box-solid bg-maroon disabled color-palette">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                        </div><!-- /. tools -->

                        <i class="fa fa-map-marker"></i>
                        <h3 class="box-title">
                    
                            <?php
                            Echo 'Weaknesses';

                            ?>
                       </h3>
                    </div>
                    
                    <div class="box-body">

                         <?php
                            $Strengths=FeedBackDet::find()
                                    ->where(['feedbackhed_id'=>$model->id,'swot_cate'=>'weaknesses'])
                                    ->all();  

                         echo '<ul style="list-style-type:square">';
                            foreach ($Strengths as $Strengthsl) 
                        {     echo '<li>  '.$Strengthsl->feedback_ques. '<br><br>';

                        }
                        echo '</ul>';
                        ?>
                    </div><!-- /.box-body-->
                    
                   
              </div>
              <!-- /.box -->
            </div>  
          
      </div> 
      
     
      <div class="..col-xs-6">
    
          <div class="box box-solid bg-teal color-palette">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                        </div><!-- /. tools -->

                        <i class="fa fa-map-marker"></i>
                        <h3 class="box-title">
                    
                            <?php
                            Echo '   Opportunities';

                            ?>
                       </h3>
                    </div>
                    
                    <div class="box-body">

                         <?php
                            $Strengths=FeedBackDet::find()
                                    ->where(['feedbackhed_id'=>$model->id,'swot_cate'=>'opportunities'])
                                    ->all();  

                         echo '<ul style="list-style-type:square">';
                            foreach ($Strengths as $Strengthsl) 
                        {     echo '<li>  '.$Strengthsl->feedback_ques. '<br><br>';

                        }
                        echo '</ul>';
                        ?>
                    </div><!-- /.box-body-->
                    
                   
              </div>
              <!-- /.box -->
            </div>  
          
      
      
    
      <div class=".col-xs-6">
    
          <div class="box box-solid bg-yellow disabled color-palette">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                        </div><!-- /. tools -->

                        <i class="fa fa-map-marker"></i>
                        <h3 class="box-title">
                    
                            <?php
                            Echo 'Threats';

                            ?>
                       </h3>
                    </div>
                    
                    <div class="box-body">

                         <?php
                            $Strengths=FeedBackDet::find()
                                    ->where(['feedbackhed_id'=>$model->id,'swot_cate'=>'threats'])
                                    ->all();  

                         echo '<ul style="list-style-type:square">';
                            foreach ($Strengths as $Strengthsl) 
                        {     echo '<li>  '.$Strengthsl->feedback_ques. '<br><br>';

                        }
                        echo '</ul>';
                        ?>
                    </div><!-- /.box-body-->
                    
                   
              </div>
              <!-- /.box -->
   
          
      </div>
       
 
<h3>ACTION PLAN</h3>
<?= GridView::widget([
        'dataProvider' => $dataResult2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'action_plan_code',
                        
            //'feedback_hed_id',
            ['header' => 'Areas to Improve',
             'attribute' => 'feedback_hed_id',
              'value'=>'feedbackDets.feedback_ques'  
                ],
            
           
            
            // 'stud_id',
            'action_plan:ntext',
            'review_date',
            'sucess_ind:ntext',
            //'tutor_id',
            'tutor_comments:ntext',
            'tutor_com_date',
            'action_satus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>       



