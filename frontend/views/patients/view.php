<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patients */

$this->title = ($model->FirstName." ".$model->LastName);
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-view">
     <h1>Appointment Confirmation </h1>
    <h2> Patient Details:  <?= Html::encode($this->title) ?></h2>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Title',
            'FirstName',
            'LastName',
            'DateOfBirth',
            'Gender',
            'ContactNumber',
            'Email:email',
          
        ],
    ]) ?>

</div>

<div class="container">
    <h2>Appointment Booking Summary</h2>

    <div class="summary-section">
        <h4>Doctor Details</h4>
        <p><strong>Name:</strong> Dr. John Doe</p>
        <p><strong>Specialization:</strong> Cardiology</p>
        <p><strong>Available Date:</strong> October 25, 2023</p>
        <p><strong>Time:</strong> 10:00 AM</p>
    </div>

    <div class="summary-section">
        <h4>Patient Details</h4>
        <p><strong>Name:</strong> Jane Smith</p>
        <p><strong>Age:</strong> 30</p>
        <p><strong>Gender:</strong> Female</p>
        <p><strong>Contact Number:</strong> (123) 456-7890</p>
        <p><strong>Email:</strong> jane.smith@example.com</p>
    </div>

    <div class="summary-section">
        <h4>Appointment Details</h4>
        <p><strong>Appointment Number:</strong> #123456</p>
        <p><strong>Appointment Date:</strong> October 25, 2023</p>
        <p><strong>Appointment Time:</strong> 10:00 AM</p>
    </div>

    <div class="summary-section">
        <h4>Charges Summary</h4>
        <p><strong>Consultation Fee:</strong> $100.00</p>
        <p><strong>Additional Charges:</strong> $20.00</p>
        <p><strong>Total Charges:</strong> <strong>$120.00</strong></p>
    </div>

    <div class="text-center">
        <button class="btn btn-success">Confirm Appointment</button>
        <button class="btn btn-danger">Cancel Appointment</button>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>