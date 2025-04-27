<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdminYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Year';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-year-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['header' => 'Academic Year',
             'attribute' => 'acad_year',],
            ['header' => 'Status',
             'attribute' =>  'acad_status',],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
