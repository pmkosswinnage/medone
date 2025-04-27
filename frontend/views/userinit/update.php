<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userinit */

$this->title = 'Update Userinit: ' . ' ' . $model->suser_id;
$this->params['breadcrumbs'][] = ['label' => 'System Users Registry', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->suser_id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userinit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
