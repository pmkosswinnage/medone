<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use frontend\models\FeedBackHed;
use frontend\models\FeedBackHedSearch;
use yii\web\Controller;
use frontend\models\Model;
use frontend\models\FeedBackDetSearch;
use frontend\models\FeedBackDet;
use frontend\models\StudActionplanHed;
use frontend\models\StudActionplanHedSearch;
use frontend\models\AdminYear;
Use frontend\models\AdminModule2;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\helpers\Json;



class SwotAnalysisController extends \yii\web\Controller
{
    public function actionViewsowt($id)
    {
        $this->layout='adminLayout';  
        $model = $this->findModel($id);
        $modelsfeedbkdet=new FeedBackDetSearch();              
        $dataResult=$modelsfeedbkdet->search($modelsfeedbkdet->feedbackhed_id = $model->id ) ; 
        $actionplan=New StudActionplanHedSearch;
        $dataResult2=$actionplan->search2($id) ;
        
        return $this->render('viewsowt',[
            'model' => $model,
            'dataResult' => $dataResult,
            'dataResult2'=>$dataResult2,

        ]);
    }
    
        public function actionViewsowttute($id)
    {
        $this->layout='adminLayout';  
        $model = $this->findModel($id);
        $modelsfeedbkdet=new FeedBackDetSearch();              
        $dataResult=$modelsfeedbkdet->search($modelsfeedbkdet->feedbackhed_id = $model->id ) ; 
        $actionplan=New StudActionplanHedSearch;
        $dataResult2=$actionplan->search2($id) ;
        
        return $this->render('viewsowttutor',[
            'model' => $model,
            'dataResult' => $dataResult,
            'dataResult2'=>$dataResult2,

        ]);
    }
    
    
    
     protected function findModel($id)
        {
            // $this->layout='adminLayout';
             if (($model = FeedBackHed::findOne($id)) !== null) {
                 return $model;
             } else {
                 throw new NotFoundHttpException('The requested page does not exist.');
             }
        }
    
    
    
    

}
