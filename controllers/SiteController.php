<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\MyForm;
use app\models\Comments;

use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\data\Pagination;

use app\models\FormAdd;
use app\models\Metals;



class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
     * @return string
     */
	public function actionShow()
	{
		$all = Metals::find()->all();
		
		return $this->render('main',
            ['all'=>$all]);
	}
<<<<<<< Updated upstream
	
	public function actionMain()
	{
		
		return $this->render('mainbtns',
            []);
	}
    public function actionIndex()
=======

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView() {
        return $this->render('view');

    }

    public function actionAdd()
>>>>>>> Stashed changes
    {
        $form = new FormAdd();
        if (($form->load(Yii::$app->request->post())) && ($form->validate())){
			$post = new Metals;
			$post->type_title = Html::encode($form->type_title_send);
            $post->type_desc = Html::encode($form->type_desc_send);
            $post->img_type = Html::encode($form->type_img_name);
            $post->img_name = Html::encode($form->name_img_name);
			$post->massa=Html::encode($form->massa);
			$post->value=Html::encode($form->value);
			$post->status=Html::encode($form->status);
			$post->from=Html::encode($form->from);
			$post->to=Html::encode($form->to);
			$post->operation = Html::encode($form->operation);
			$post->name_title = Html::encode($form->name_title_send);
            $post->name_desc = Html::encode($form->name_desc_send);
            $post->name_type = Html::encode($form->name_type_send);
            $post->date = Html::encode($form->date_send);
            $post->time = Html::encode($form->time_send);
			
			$post->save();
        }
		
		$items = [
			'' => 'Операция',
			'Расход' => 'Расход',
			'Приход' => 'Приход',
		];
		$items2 = [
			'' => 'От кого',
			'Анна' => 'Анна',
			'Петр' => 'Петр',
			'Никита' => 'Никита',
			'Галина' => 'Галина',
			'Жоомарт' => 'Жоомарт',
			'Поставщик' => 'Поставщик',
			'Остаток с прошлого месяца' => 'Остаток с прошлого месяца',
		];
		$items3 = [
			'' => 'Кому',
			'Анна' => 'Анна',
			'Петр' => 'Петр',
			'Никита' => 'Никита',
			'Галина' => 'Галина',
			'Жоомарт' => 'Жоомарт',
		];
		$items4 = [
			'' => 'Статус',
			'Годное' => 'Годное',
			'Брак' => 'Брак',
		];
	
        return $this->render('add',
            [ 'form' => $form, 'operations'=>$items, 'froms'=>$items2, 'tos'=>$items3, 'statuses'=>$items4]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
	 
	 
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
