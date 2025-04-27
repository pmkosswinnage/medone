<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Doctor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['/doctor/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'specialization.name',
            'description:ntext',
            'qualification',
            'MaxNoPatient',
            'DocFee',
        ],
    ]) ?>

</div>

<div class="container">
    <h2>Dctor Session</h2>
    <div class="doctor-list">
        <div class="list-group">
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dr. Kamala Rajapaksa</h4>
                 <span class="label label-primary">Session Available</span>
                <p class="list-group-item-text">Available Date: April 25, 2025</p>
                <button class="btn btn-primary">Make Appointment</button>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dr. Kamala Rajapaksa</h4>
                 <span class="label label-warning">Session Full</span>
                <p class="list-group-item-text">Available Date: April 26, 2025</p>
                <button class="btn btn-primary" disabled>Make Appointment</button>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dr. Kamala Rajapaksa</h4>
                <p class="list-group-item-text">Available Date: April 27, 2025</p>
                 <span class="badge text-bg-success">Available</span>
                 <button class="btn btn-primary">Make Appointment</button>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dr. Kamala Rajapaksa</h4>
                <p class="list-group-item-text">Available Date: April 30, 2025</p>
                 <span class="badge text-bg-success">Available</span>
                 <button class="btn btn-primary">Make Appointment</button>
            </div>
            <div class="list-group-item">
                <h4 class="list-group-item-heading">Dr. Kamala Rajapaksa</h4>
                <p class="list-group-item-text">Available Date: May 02, 2025</p>
                 <span class="badge text-bg-success">Available</span>
                 <button class="btn btn-primary">Make Appointment</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
