<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackDet */

$this->title = 'Create Feed Back Det';
$this->params['breadcrumbs'][] = ['label' => 'Feed Back Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-det-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
