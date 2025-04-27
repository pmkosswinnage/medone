<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Patientmedicalhistory */

$this->title = 'Create Patientmedicalhistory';
$this->params['breadcrumbs'][] = ['label' => 'Patientmedicalhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientmedicalhistory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
