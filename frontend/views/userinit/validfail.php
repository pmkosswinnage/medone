<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userinit */

$this->title = 'User ID Not Found';
//$this->params['breadcrumbs'][] = ['label' => 'Userinits', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinit-validfail">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="row">
           <div id="over">
            <span class="Centerer"></span>
            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/ValdationFail.png" alt="" />
            </div>
                    
        </div>
    </div>       

</div>

