<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AdminModule2;
use frontend\models\AdminModule2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminModule2Controller implements the CRUD actions for AdminModule2 model.
 */
class AdminModule2Controller extends Controller
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
     * Lists all AdminModule2 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='adminLayout'; 
        $searchModel = new AdminModule2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    
      public function actionViewindex()
    {
        $this->layout='adminLayout'; 
        $searchModel = new AdminModule2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('viewindex', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    

    /**
     * Displays a single AdminModule2 model.
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
     * Creates a new AdminModule2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout='adminLayout'; 
        $model = new AdminModule2();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AdminModule2 model.
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
     * Deletes an existing AdminModule2 model.
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

    
    
        public function actionLists($id)
    {
        $countmodule= AdminModule2::find()
                ->where(['mod_year' => $id])
                ->count();
 
        $modules = AdminModule2::find()
                ->where(['mod_year' => $id])
                ->all();
 
        if($countmodule > 0 )
        {
            foreach($modules as $module ){
                echo "<option value='".$module->id."'>".$module->mod_name."</option>";
            }
        }
        else{
            echo "<option> - </option>";
        }
 
    }
    
    
    
    
    /**
     * Finds the AdminModule2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdminModule2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $this->layout='adminLayout'; 
        if (($model = AdminModule2::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
