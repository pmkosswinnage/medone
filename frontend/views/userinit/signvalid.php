<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userinit */

$this->title = 'National Insurance Number';
//$this->params['breadcrumbs'][] = ['label' => 'Userinits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinit-signvalid">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please enter your National Insurance Number for validating the Signup:</p>
    <div class="row">
           <div id="over">
            <span class="Centerer"></span>
            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/signval.jpg" alt="" />
            </div>
          
        
         <div class="overlay">  
        
            <div class="col-lg-5">

                 <?php $form = ActiveForm::begin(); ?>

                 <?= $form->field($searchModel, 'suser_id')->textInput(['maxlength' => true])->label('National Insurance Number') ?>

                   <div class="form-group">
                        <?= Html::submitButton('Validate my National Insurance Number', ['class' => 'btn btn-lg btn-success', 'name' => 'signupval-button']) ?>
                   </div>

                 <?php ActiveForm::end(); ?> 
            </div>
          </div>
        </div>
    </div>       
   
</div>

