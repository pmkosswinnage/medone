<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientmedicalhistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patientmedicalhistories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientmedicalhistory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patientmedicalhistory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HistoryID',
            'PatientID',
            'DoctorID',
            'AppointmentID',
            'Diagnosis:ntext',
            // 'Treatment:ntext',
            // 'Prescription:ntext',
            // 'Notes:ntext',
            // 'DateRecorded',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
