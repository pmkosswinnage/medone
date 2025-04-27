<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHed */

$this->title = 'New Feed-Back Form';
$this->params['breadcrumbs'][] = ['label' => 'Feed-Back Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-hed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsfeedbkdet'=>$modelsfeedbkdet
    ]) ?>

</div>
