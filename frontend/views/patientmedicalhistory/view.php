<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patientmedicalhistory */

$this->title = 'Patient Medical Records ';
$this->params['breadcrumbs'][] = ['label' => 'Patientmedicalhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientmedicalhistory-view">

    <h1>Last Doctor Visit</h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patient.FirstName',
            'patient.LastName',
            'doctor.name',
            'AppointmentID',
            'Diagnosis:ntext',
            'Treatment:ntext',
            'Prescription:ntext',
            'DateRecorded',
        ],
    ]) ?>



<div class="container">
    <h2>Patient Medical History</h2>

    <div class="history-section">
        <h4>Personal Information</h4>
        <p><strong>Name:</strong> Jane Smith</p>
        <p><strong>Age:</strong> 30</p>
        <p><strong>Gender:</strong> Female</p>
        <p><strong>Contact Number:</strong> (123) 456-7890</p>
        <p><strong>Email:</strong> jane.smith@example.com</p>
    </div>

    <div class="history-section">
        <h4>Medical History</h4>
        <ul>
            <li>Hypertension (Diagnosed in 2020)</li>
            <li>Asthma (Diagnosed in 2018)</li>
            <li>Previous Surgery: Appendectomy (2015)</li>
        </ul>
    </div>

    <div class="history-section">
        <h4>Allergies</h4>
        <ul>
            <li>Penicillin</li>
            <li>Peanuts</li>
            <li>Shellfish</li>
        </ul>
    </div>

    <div class="history-section">
        <h4>Current Medications</h4>
        <ul>
            <li>Lisinopril - 10 mg (once daily)</li>
            <li>Albuterol Inhaler (as needed)</li>
        </ul>
    </div>

    <div class="history-section">
        <h4>Previous Appointments</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Reason for Visit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>October 1, 2023</td>
                    <td>Dr. John Doe</td>
                    <td>Routine Checkup</td>
                </tr>
                <tr>
                    <td>August 15, 2023</td>
                    <td>Dr. Emily Johnson</td>
                    <td>Asthma Follow-up</td>
                </tr>
                <tr>
                    <td>June 10, 2023</td>
                    <td>Dr. Sarah Wilson</td>
                    <td>Blood Pressure Management</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


</div>
