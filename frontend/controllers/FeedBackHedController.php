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
use frontend\models\AdminYear;
Use frontend\models\AdminModule2;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\helpers\Json;
/**
 * FeedBackHedController implements the CRUD actions for FeedBackHed model.
 */
class FeedBackHedController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all FeedBackHed models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='adminLayout';  
        $searchModel = new FeedBackHedSearch();
        //$searchModel= FeedBackHed::find()->where('user_id= :user_id',[':user_id'=>Yii::$app->user->identity->user_id])->all(); 
        $dataProvider = $searchModel->search1(Yii::$app->request->queryParams);
        // $dataProvider = $searchModel;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FeedBackHed model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout='adminLayout';  
        $model = $this->findModel($id);
        $modelsfeedbkdet=new FeedBackDetSearch();              
        $dataResult=$modelsfeedbkdet->search($modelsfeedbkdet->feedbackhed_id = $model->id ) ;   
       


        return $this->render('view', [

            'model' => $model,

            'dataResult' => $dataResult,

        ]);
        
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
    }

    /**
     * Creates a new FeedBackHed model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //$this->layout='adminLayout';  
        $model = new FeedBackHed();
        $modelsfeedbkdet = [new FeedBackDet];
        $model->user_id=Yii::$app->user->identity->user_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            $modelsfeedbkdet = Model::createMultiple(FeedBackDet::classname());
            Model::loadMultiple($modelsfeedbkdet, Yii::$app->request->post());

//            // ajax validation
//            if (Yii::$app->request->isAjax) {
//                Yii::$app->response->format = Response::FORMAT_JSON;
//                return ArrayHelper::merge(
//                    ActiveForm::validateMultiple($modelsAddress),
//                    ActiveForm::validate($modelCustomer)
//                );
//            }

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsfeedbkdet) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    
                    if ($flag = $model->save(false)) {
                        foreach ($modelsfeedbkdet as $modelsfeedbkdet) 
                            {
                            $modelsfeedbkdet->feedbackhed_id = $model->id;
                            if (! ($flag = $modelsfeedbkdet->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
                 
           } else {
            return $this->render('create', [
                'model' => $model,
                'modelsfeedbkdet' => (empty($modelsfeedbkdet)) ? [new FeedBackDet] : $modelsfeedbkdet
            ]);
        }
    }

    /**
     * Updates an existing FeedBackHed model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        //$this->layout='adminLayout';  
         $model = $this->findModel($id);
         $modelsfeedbkdet= FeedBackDet::find()->where('feedbackhed_id = :feedbackhed_id',[':feedbackhed_id'=>$id])->all();       
         //$dataResultt= ;
//         $modelsfeedbkdetse=new FeedBackDetSearch();              
//         $dataResult=$modelsfeedbkdetse->search($modelsfeedbkdetse->feedbackhed_id = $model->id ) ;
                 
       

        if ($model->load(Yii::$app->request->post())) {
            $oldIDs = ArrayHelper::map(FeedBackDet::find()->all(), 'id', 'feedbackhed_id');
            $modelsfeedbkdet = Model::createMultiple(FeedBackDet::classname(), $modelsfeedbkdet);
            Model::loadMultiple($modelsfeedbkdet, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map(FeedBackDet::find()->all(), 'id', 'feedbackhed_id')));

//            // ajax validation
//            if (Yii::$app->request->isAjax) {
//                Yii::$app->response->format = Response::FORMAT_JSON;
//                return ArrayHelper::merge(
//                    ActiveForm::validateMultiple($modelsfeedbkdet),
//                    ActiveForm::validate($model)
//                );
//            }

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsfeedbkdet) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            FeedBackDet::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsfeedbkdet as $modelsfeedbkdet) {
                            $modelsfeedbkdet->feedbackhed_id = $model->id;
                            if (! ($flag = $modelsfeedbkdet->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
            
             return $this->render('update', [
            'model' => $model,
            'modelsfeedbkdet' => (empty($modelsfeedbkdet)) ? [new feedBackDet] : $modelsfeedbkdet
            ]); 
        }
        
        Else {
            
            return $this->render('update', [
            'model' => $model,
            'modelsfeedbkdet'=>$modelsfeedbkdet
            ]); 
            
            
        }

      
    }

    
    
    public function actionGet_feedyear($feedid)
    {
        //find the Acadamic Year ID from feed_back_hed
        $feedyearid=FeedBackHed::findone($feedid);
        
        $feedyear=AdminYear::findone($feedyearid->acad_year_id);
        echo Json::encode($feedyear);    
        
  
            
    }
    
    public function actionGet_feedmodule($feedid)
    {
        //find the Acadamic Year ID from feed_back_hed
       $feedyearid=FeedBackHed::findone($feedid);
        
       $feedmodule=AdminModule2::findone($feedyearid->module_id);
        echo Json::encode($feedmodule);  
        
    }
    
//    
//    public function actionGet_feedpoints($feedid)
//    {
//       //find the Acadamic Year ID from feed_back_hed
//       $feedyearid=FeedBackHed::findone($feedid);
//        
//       $feedpoints= FeedBackDet::find()->where(['feedbackhed_id' =>$feedyearid->id,'swot_cate'=>'weaknesses'])->all();
//            
//        //print_r(json_encode($feedpoints));
//         echo Json::encode($feedpoints);  
//    }
//    
    public function actionGet_feedpoints($feedqid)
    {
        $countmodule= FeedBackDet::find()
                ->where(['feedbackhed_id' =>$feedqid,'swot_cate'=>'weaknesses'])
                ->count();
 
        $modules = FeedBackDet::find()
                ->where(['feedbackhed_id' =>$feedqid,'swot_cate'=>'weaknesses'])
                ->all();
 
        if($countmodule > 0 )
        {
            foreach($modules as $module ){
                echo "<option value='".$module->id."'>".$module->feedback_ques."</option>";
            }
        }
        else{
            echo "<option> - </option>";
        }
 
    }
    
    
    
    
    

    /**
     * Deletes an existing FeedBackHed model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->layout='adminLayout';  
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FeedBackHed model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FeedBackHed the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
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
