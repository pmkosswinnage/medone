<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AppointmentsSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appointments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Appointments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AppointmentID',
            'PatientID',
            'DoctorID',
            'AppointmentDate',
            'Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
