<?php

/* @var $this yii\web\View */

$this->title = 'MED-ONE.com';

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
                   
        <p class="lead" style="color: white">Inspiring Your Success</p>
        
        <p> <a class="btn btn-lg btn-success" href="http://www.yiiframework.com" id="StartFeed">Get Started with Feed-Cloud.com</a></p>
             
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
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
