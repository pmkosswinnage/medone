<?php

namespace frontend\controllers;

use Yii;
use frontend\models\StudActionplanHed;
use frontend\models\StudActionplanHedSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudActionplanHedController implements the CRUD actions for StudActionplanHed model.
 */
class StudActionplanHedController extends Controller
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
     * Lists all StudActionplanHed models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='adminLayout';  
        $searchModel1 = new StudActionplanHedSearch();
        $dataProvider = $searchModel1->search1(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel1,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudActionplanHed model.
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
     * Creates a new StudActionplanHed model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $digits = 3;
        $var = rand(pow(10, $digits-1), pow(10, $digits)-1);;
        $items = strval($var);
        
        $model = new StudActionplanHed();
        $model->stud_id=Yii::$app->user->identity->user_id;
        $model->action_plan_code=(Yii::$app->user->identity->user_id).'-'.$items ;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StudActionplanHed model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
        public function actionUpdate2($id)
    {
          
        $model = $this->findModel($id);
        $model->tutor_id=Yii::$app->user->identity->user_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['swot-analysis/viewsowttute', 'id' => $model->feedback_hed_id]);
        } else {
            return $this->render('update2', [
                'model' => $model,
            ]);
        }
    }
    
    
    

    /**
     * Deletes an existing StudActionplanHed model.
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
     * Finds the StudActionplanHed model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudActionplanHed the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudActionplanHed::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
