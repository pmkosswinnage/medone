<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminYear */

$this->title = 'Academic Year: ' . ' ' . $model->acad_year;
$this->params['breadcrumbs'][] = ['label' => 'Academic Year', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acad_year, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
