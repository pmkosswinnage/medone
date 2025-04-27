<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        
            <div id="over">
            <span class="Centerer"></span>
            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/signup.png" alt="" />
            </div>
        
        <div class="overlay"> 
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'user_id' )->textinput(['readonly' => true])->label('National Insurance Number') ?>

                    <?= $form->field($model, 'username' ) ->label('User Name') ?>

                    <?= $form->field($model, 'email')->label('E-mail') ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>

                    <?= $form->field($model,'ConfirmPassword')->passwordInput() ->label('Confirm Password') ?>

                    <?= $form->field($model,'first_name')->label('First Name') ?>

                    <?= $form->field($model,'last_name')->label('Last Name') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>    
    </div>
</div>
