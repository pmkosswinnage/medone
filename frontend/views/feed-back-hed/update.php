<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHed */

$this->title = 'Feed-Back Form: ' . ' ' . $model->feedback_name;
$this->params['breadcrumbs'][] = ['label' => 'Feed-Back Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->feedback_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feed-back-hed-update">

    <h1><?= Html::encode($this->title) ?></h1>

      <?= $this->render('_form', [
        'model' => $model,
        'modelsfeedbkdet'=>$modelsfeedbkdet
    ]) ?>

</div>
