<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'MED ONE E-Channeling';

?>
<div class="site-index">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   

             <!-- Wrapper for carousel items -->
        
            <div class="carousel-inner">
                <div class="item active">
                <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd1.jpg" alt="First Slide">
                </div>
                
                <div class="item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd2.jpg" alt="Second Slide">
                </div>

                <div class="item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd3.jpg" alt="Third Slide">
                </div>

             </div>
         <div class="row">    
        <div class="jumbotron" id="Formlay">
                   
        <p class="lead" style="color: white">Your Health, Our Priority</p>
        
        <p> 
            
            <?=$url = Html::a('Get Started with MED ONE E-Channeling',
                        ['/site/login'],
                        ['class' => 'btn btn-lg btn-success', 'data-method'=>'post']);?>
            
<!--            <a class="btn btn-lg btn-success" href="http://www.yiiframework.com" id="StartFeed">Get Started with MED ONE E-Channeling</a></p>-->
             
         </div>
         </div>    
             <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left"></span>
             </a>

            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

   

 </div>
    

 


    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>About MED-ONE </h2>
                
                <p>At MED ONE E-Channeling , we believe in making healthcare accessible and convenient for everyone. Our app is designed to simplify the process of booking medical appointments, ensuring you get the care you need, when you need it.</p>

                <p>
                    <?=$url = Html::a('Read more ..',
                        ['/site/about'],
                        ['class' => 'btn btn-block btn-info', 'data-method'=>'post']);?>
                    
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Signup to MED-ONE </h2>

                <p>
                    Search: Find healthcare providers based on specialty, location, and availability.
                    Book: Choose a convenient time and book your appointment instantly.                
                    Manage: View and manage your appointments, reschedule if necessary, and keep track of your health records.
                </p>

                <p>
                     <?=$url = Html::a('Start Signup Here ...',
                        ['/userinit/validsign'],
                        ['class' => 'btn btn-block btn-warning', 'data-method'=>'post']);?>
                    

                </p>
            </div>
            <div class="col-lg-4">
                <h2>Login to MED-ONE</h2>

                <p>
                   To access your portal please click on below button. You can experience the ultimate services of 
                   MED ONE E-Channeling portal. If you forgot your login details, 
                   please contact Portal Administrator with your National Insurance Number Information using the Contact Area of the portal.
                    
                </p>

                <p>
                    <?=$url = Html::a('Start Signup Here ...',
                        ['/site/login'],
                        ['class' => 'btn btn-block btn-danger', 'data-method'=>'post']);?>
                    
                    
                </p>
            </div>
        </div>

    </div>
</div>
