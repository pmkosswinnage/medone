<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FeedBackDetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feed Back Dets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-det-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Feed Back Det', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'feedbackhed_id',
            'feedback_ques',
            'swot_cate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
