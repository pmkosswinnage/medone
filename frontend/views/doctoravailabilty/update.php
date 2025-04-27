<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Doctoravailabilty */

$this->title = 'Update Doctoravailabilty: ' . ' ' . $model->AvailabilityDateID;
$this->params['breadcrumbs'][] = ['label' => 'Doctoravailabilties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AvailabilityDateID, 'url' => ['view', 'id' => $model->AvailabilityDateID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doctoravailabilty-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
