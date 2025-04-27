<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Patientmedicalhistory */

$this->title = 'Update Patient Medical Records: ' . ' ' . $model->HistoryID;
$this->params['breadcrumbs'][] = ['label' => 'Patientmedicalhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HistoryID, 'url' => ['view', 'id' => $model->HistoryID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patientmedicalhistory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
