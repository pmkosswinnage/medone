<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FeedBackHedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SWOT Analysis Feed-Back List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-hed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
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
            
           

            [
              'class' => 'yii\grid\ActionColumn',
              'template' => '{view}',  
                
                'buttons' => [
                'view' => function ($url, $model, $key) {
                $options = [
                    'title' => Yii::t('yii', 'View SOWT Analysis'),
                    'aria-label' => Yii::t('yii', 'info'),
                    'data-pjax' => '0',
                     ];
        
        
                $url = \yii\helpers\Url::toRoute(['swot-analysis/viewsowt', 'id' => $key]);

                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
                    }
                ],
                
  
                
                
             ],
        ],
    ]); ?>

</div>