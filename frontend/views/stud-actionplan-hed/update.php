<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHed */

$this->title = 'Action Plan: ' . ' ' . $model->	action_plan_code;
$this->params['breadcrumbs'][] = ['label' => 'Feed-back Action Plan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->action_plan_code, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stud-actionplan-hed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
