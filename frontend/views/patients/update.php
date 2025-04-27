<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patients */

$this->title = 'Update Patients - ' . ' ' .  ($model->FirstName.' ' .$model->LastName);
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>  ($model->FirstName.' ' .$model->LastName), 'url' => ['view', 'id' => $model->PatientsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patients-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
