<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\StudActionplanHed */

$this->title = 'New Action Plan';
$this->params['breadcrumbs'][] = ['label' => 'Feed-back Action Plan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-actionplan-hed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
