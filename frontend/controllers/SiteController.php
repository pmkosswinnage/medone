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

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
   
    Public $Currentuser;
    public $param = '';
            
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
    
        return $this->render('index');
    }
    
    
    /*  Display Administrator Home Page*/
    public function actionIndexadmin()
    {
        $this->layout='adminLayout';     
        return $this->render ('indexadmin');
    }
    
    
    
        public function actionSowtanalysis($studid)
    {
        $this->layout='adminLayout';
        $searchModel = new FeedBackHedSearch();
        $dataProvider = $searchModel->search1(Yii::$app->request->queryParams);
//        $swotsdetails=FeedBackHed::find()
//                    ->where(['user_id' =>$studid])
//                      ->all();
               
        return $this->render ('/sowt/swotdetails',
                [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                ]);
    }
      
    
    public function actionCalender()
    {
        $this->layout='mylayout';     
        return $this->render ('mycalander');
    }
    
    
       public function actionMailbox()
    {
        $this->layout='mylayout';     
        return $this->render ('mymailbox');
    }
    
    // Student Dashborad Main Index
        public function actionIndexstudent()
    {
        $this->layout='adminLayout';
        $searchModel = new AdminYearSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
               
        return $this->render ('indexstudent',
                [ 'searchModel' => $searchModel,
                  'dataProvider' => $dataProvider,]
                
                                
                 );
    }
    
    
    
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $modelrole=new user;
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
                       
            $roleidresult=$modelrole->getRoleId(Yii::$app->request->post());
            $roleid=$roleidresult->role;
            
            If ($roleid==1)
                {
                return $this->redirect(array('site/indexadmin'));
//                array('/site/signup','passid'=>$passid
                }   
             else If ($roleid==2)
                {
                return $this->redirect(array('doctor/index'));
                }
             else If ($roleid==3)
                {
                return $this->redirect(array('site/calender'));
                }
            else {
                 return $this->goBack();   
                 }  
            
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
       Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup($passid,$passrole)
    {
        $model = new SignupForm();
        $model->user_id=$passid;
        $model->role=$passrole;
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    
                If ($passrole==1)
                {
                return $this->redirect(array('site/indexadmin'));
//                array('/site/signup','passid'=>$passid
                }   
             else If ($passrole==2)
                {
                return $this->redirect(array('doctor/index'));
                }
             else If ($passrole==3)
                {
                return $this->redirect(array('doctoravailabilty/index'));
                }
            else {
                 return $this->goBack();   
                 } 
                }
            }
        }

        return $this->render('signup',
                [
            'model' => $model,
            
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
