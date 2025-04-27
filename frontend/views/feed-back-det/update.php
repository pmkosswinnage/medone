<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackDet */

$this->title = 'Update Feed Back Det: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Feed Back Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feed-back-det-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
