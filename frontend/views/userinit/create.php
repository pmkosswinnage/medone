<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Userinit */

$this->title = 'Register New System User';
$this->params['breadcrumbs'][] = ['label' => 'System Users Registry', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
