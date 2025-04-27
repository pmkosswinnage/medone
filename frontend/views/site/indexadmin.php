<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Feed-Cloud.com';

?>
<div class="site-indexadmin">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
        
        <p class="lead">You have successfully logged into Administrator Control Panel.</p>
       
        <p>
             <?=$url = Html::a('Get started Feed-Cloud.com Configurations',
                        ['/admin-year/index'],
                        ['class' => 'btn btn-lg btn-success', 'data-method'=>'post']);?>
            
<!--            <a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started Feed-Cloud.com Configurations</a></p>-->
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Step 1 : New Academic Year</h2>

                <p>Welcome to Feed-Cloud.com. To start the initial configuration please click the below button. 
                    Feed-Cloud.com will required to register at least one or more academic year within the system. 
                    Once you complete this stage please continue with Step 2 .   </p>

                <p>
                     <?=$url = Html::a('New Academic Year',
                        ['/admin-year/index'],
                        ['class' => 'btn btn-block btn-info btn-lg', 'data-method'=>'post']);?>
                    

                 </p>   
            </div>
            <div class="col-lg-4">
                <h2>Step 2 : New Module</h2>

                <p>Once you complete step1,  you can start with configuration of Academic Modules for selected year.  
                    To start the new Academic modules please click on the below button. 
                    Module(s) will available for all users of the system for their feed-back information, 
                    action planning. </p>
                
                
                
                <p>
                    <?=$url = Html::a('New Academic Module',
                        ['/admin-module2/index'],
                        ['class' => 'btn btn-block btn-warning btn-lg', 'data-method'=>'post']);?>

                
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Step 2 : New System User</h2>
                
                <p>To start the New System user please click on the below button. 
                    With Feed-Cloud, you can configure three types of user roles namely known 
                    as Administrator, Student and Tutor. Once you complete this stage users can start wit Signup process.</p>

                <p>
                     <?=$url = Html::a('New System User',
                        ['/userinit/index'],
                        ['class' => 'btn btn-block btn-danger btn-lg', 'data-method'=>'post']);?>
                
                </p>
            </div>
        </div>

    </div>
    
</div>
