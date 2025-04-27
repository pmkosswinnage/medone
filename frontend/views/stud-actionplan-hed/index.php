<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudActionplanHedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feed-back Action Plan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-actionplan-hed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create New Action Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'action_plan_code',
            'acad_year_id',
            
            ['header' => 'Module Name',
             'attribute' => 'module_id',
              'value'=>'module.mod_name'  
                ],
            
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
