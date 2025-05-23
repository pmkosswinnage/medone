<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DoctoravailabiltySerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doctoravailabilties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctoravailabilty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Doctoravailabilty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AvailabilityDateID',
            'DoctorID',
            'AvailableDate',
            'StartTime',
            'EndTime',
            // 'Availability',
            // 'AppointmentCount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
