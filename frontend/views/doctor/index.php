<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DoctorSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MED-One.com';

?>
<div class="doctor-index">

<h3 align="center">DOCTOR CHANELLING</h3>


<div class="card text-white bg-primary mb-3" style="max-width: 150rem;">
  <div class="card-header">
      <h4 align="center"> Welcome to Doctor Channel, your trusted source for reliable health information and expert medical advice. </h4>   
    <button type="button" class="btn btn-success btn-lg btn-block">Find Your a Doctor</button>

    </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
    <br>     
    

  </div>
</div>


     <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                                                     //'id',
                            'name',
                             ['header' => 'specialization',
                              'attribute' => 'specialization_id',
                              'value'=> 'specialization.name',
                            ],

                            
                            
                            'description:ntext',
                            'qualification',
                            // 'image',
                            // 'status',
                            // 'MaxNoPatient',
                            // 'DocFee',
                            // 'user_id',

                            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],                   
                             ],
                         ]); ?>
                 


</div>


