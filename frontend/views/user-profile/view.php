<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserProfile */

$this->title = 'User Profile : '.$model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
              ['label' => 'User Name',
             'attribute'=> 'username',] ,
              
             ['label' => 'Email',
             'attribute'=> 'email',] ,
                       
             ['label' => 'User ID',
             'attribute'=> 'user_id',] ,
            
              ['label' => 'First Name',
             'attribute'=> 'first_name',] ,
            
            ['label' => 'Last Name',
             'attribute'=> 'last_name',] ,
            
            'register_date',
        ],
    ]) ?>

</div>
