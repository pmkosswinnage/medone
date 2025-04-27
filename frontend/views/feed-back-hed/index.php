<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FeedBackHedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feed-Back Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-hed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create New Feed-Back Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['header' => 'Academic Year',
             'attribute' => 'acad_year_id',
              'value'=>'acadYear.acad_year'  
                ],
            
            ['header' => 'Module Name',
             'attribute' => 'module_id',
              'value'=> 'module.mod_name',],
            
            
            
            ['header' => 'Feed-Back Name',
             'attribute' => 'feedback_name',],
            
  
             ['header' => 'Status',
             'attribute' => 'feedback_status',],
            
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
