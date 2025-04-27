<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Doctoravailabilty */

$this->title = $model->AvailabilityDateID;
$this->params['breadcrumbs'][] = ['label' => 'Doctoravailabilties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctoravailabilty-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AvailabilityDateID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AvailabilityDateID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AvailabilityDateID',
            'DoctorID',
            'AvailableDate',
            'StartTime',
            'EndTime',
            'Availability',
            'AppointmentCount',
        ],
    ]) ?>

</div>
