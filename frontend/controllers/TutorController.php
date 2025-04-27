<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\User;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\AdminYear;
use frontend\models\AdminYearSearch;
use frontend\models\FeedBackHed;
use frontend\models\FeedBackHedSearch;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;



class TutorController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout='adminLayout';
        $searchModel = new AdminYearSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        
        return $this->render('index',
                [ 'searchModel' => $searchModel,
                  'dataProvider' => $dataProvider,]
                );
    }
    
    
     public function actionFeedbacklist()
    {
        $this->layout='adminLayout';
        $searchModel = new FeedBackHedSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);
//        $swotsdetails=FeedBackHed::find()
//                    ->where(['user_id' =>$studid])
//                      ->all();
               
        return $this->render ('/tutor/feedlist',
                [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                ]);
    }
    
    
    
    
    
    

}
