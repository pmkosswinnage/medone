<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdminModule2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-module2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
              
            
           // 'id',
           
            ['header' => 'Academic Year',
            'attribute' => 'modYear.acad_year',],
            
             ['header' => 'Module Code',
             'attribute' => 'mod_code',],
            
             ['header' => 'Module Name',
             'attribute' => 'mod_name',],
            
             ['header' => 'Description',
             'attribute' => 'mod_desc',],
            
            ['header' => 'Status',
             'attribute' => 'mod_status',],
            
           
        ],
        
        
        
    ]); ?>

</div>
