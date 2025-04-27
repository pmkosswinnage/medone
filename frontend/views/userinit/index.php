<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserinitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'System Users Registry';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Register New User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
             ['header' => 'User ID',
             'attribute' => 'suser_id',],
            
             ['header' => 'System Role',
             'attribute' => 'srole',],
            
         

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

     <p>
         System Role:<br>
         1- Administrator  
         2- Student        
         3-Tutor   
    </p>

</div>
