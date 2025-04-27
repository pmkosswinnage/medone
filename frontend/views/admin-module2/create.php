<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AdminModule2 */

$this->title = 'New Module';
$this->params['breadcrumbs'][] = ['label' => 'Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-module2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
