<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHed */

$this->title = 'Action Plan: ' . ' ' . $model->	action_plan_code;
$this->params['breadcrumbs'][] = ['label' => 'SWOT Analysis Feed-back List', 'url' => ['/tutor/feedbacklist']];
$this->params['breadcrumbs'][] = ['label' =>  'SWOT Analysis', 'url' => ['swot-analysis/viewsowttute', 'id' => $model->feedback_hed_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stud-actionplan-hed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
