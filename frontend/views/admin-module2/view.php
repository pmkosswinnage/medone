<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminModule2 */

$this->title = $model->mod_code;
$this->params['breadcrumbs'][] = ['label' => 'Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-module2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['label' => 'Academic Year',
             'attribute'=> 'modYear.acad_year',] ,
            
             ['label' => 'Module Code',
             'attribute'=> 'mod_code',] ,
            
             ['label' => 'Module Name',
             'attribute'=> 'mod_name',] ,
            
             ['label' => 'Description',
             'attribute'=> 'mod_desc',] ,
            
             ['label' => 'Status',
             'attribute'=> 'mod_status',] ,
            
                     
        ],
    ]) ?>

</div>
