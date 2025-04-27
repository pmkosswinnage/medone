<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Userinit;
use frontend\models\UserinitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserinitController implements the CRUD actions for Userinit model.
 */
class UserinitController extends Controller
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
     * Lists all Userinit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='adminLayout';  
        $searchModel = new UserinitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Userinit model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout='adminLayout';  
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Userinit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionValidsign()
    {
        $searchModel = new Userinit();
        
        if ($searchModel->load(Yii::$app->request->post())) {
        $dataProvider = $searchModel->searchbyID(Yii::$app->request->post());
        
        if (isset($dataProvider) && $dataProvider!==Null )
            {
                $passid=$dataProvider->suser_id;
                $passrole=$dataProvider->srole;
                return $this->redirect(array('/site/signup','passid'=>$passid,'passrole'=>$passrole));
            
            }
        else {
                 return $this->render('validfail', [
                'searchModel' => $searchModel
            
                ]);
            }
            
       
        }
            
        return $this->render('signvalid', [
            'searchModel' => $searchModel
            
        ]);
     }
    
    
    
    public function actionCreate()
    {
        $this->layout='adminLayout';  
        $model = new Userinit();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    

    /**
     * Updates an existing Userinit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $this->layout='adminLayout';  
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Userinit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Userinit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Userinit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Userinit::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
            
        }
    }
}
