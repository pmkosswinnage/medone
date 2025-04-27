<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Doctoravailabilty */

$this->title = 'Create Doctoravailabilty';
$this->params['breadcrumbs'][] = ['label' => 'Doctoravailabilties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctoravailabilty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
