<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHed */

$this->title = $model->action_plan_code;
$this->params['breadcrumbs'][] = ['label' => 'Stud Actionplan Heds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-actionplan-hed-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            
            ['label' => 'Action Plan Code',
             'attribute'=> 'action_plan_code',] ,
            
            ['label' => 'Academic Year',
             'attribute'=> 'acad_year_id',] ,
           
            ['label' => 'Module Name',
             'attribute'=> 'module.mod_name',] ,
            
            ['label' => 'Feed-Back Name',
             'attribute'=> 'feedbackHed.feedback_name',] ,
            
             ['label' => 'Areas to Improve',
             'attribute'=> 'feedbackDets.feedback_ques',] ,
            
            
            //'action_plan_code',
            //'stud_id',
            
             ['label' => 'Action Plan',
             'attribute'=> 'action_plan',] ,
            
            ['label' => 'Review Date',
             'attribute'=> 'review_date',] ,
            
            ['label' => 'Success Indicators',
             'attribute'=> 'sucess_ind',] ,
            
            ['label' => 'Tutor Comments',
             'attribute'=> 'tutor_comments',] ,
            
            ['label' => 'Tutor Comments Date',
             'attribute'=> 'tutor_com_date',] ,
            //'tutor_id',
                  
             ['label' => 'Status',
             'attribute'=> 'action_satus',] ,
            
            
        ],
    ]) ?>

</div>
