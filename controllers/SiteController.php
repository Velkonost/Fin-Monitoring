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
	public function actionMain()
	{
		$all = Metals::find()->all();
		
		return $this->render('main',
            ['all'=>$all]);
	}
    public function actionIndex()
    {
        $form = new FormAdd();
        if (($form->load(Yii::$app->request->post())) && ($form->validate())){
			$post = new Metals;
			$post->type=Html::encode($form->type);
            $post->img_type = Html::encode($form->type_img_name);
            $post->img_name = Html::encode($form->name_img_name);
			$post->gram=Html::encode($form->massa);
			$post->pieces=Html::encode($form->value);
			$post->status=Html::encode($form->status);
			$post->from=Html::encode($form->from);
			$post->to=Html::encode($form->to);
			$post->operation=Html::encode($form->operation);
			$post->name=Html::encode($form->name);;
			
			$post->save();
        }
		
		$items = [
			'' => 'Операция',
			'0' => 'Расход',
			'1' => 'Приход',
		];
		$items2 = [
			'' => 'От кого',
			'0' => 'Анна',
			'1' => 'Петр',
			'2' => 'Никита',
			'3' => 'Галина',
			'4' => 'Жоомарт',
			'5' => 'Поставщик',
			'6' => 'Остаток с прошлого месяца',
		];
		$items3 = [
			'' => 'Кому',
			'0' => 'Анна',
			'1' => 'Петр',
			'2' => 'Никита',
			'3' => 'Галина',
			'4' => 'Жоомарт',
		];
		$items4 = [
			'' => 'Статус',
			'0' => 'Годное',
			'1' => 'Брак',
		];
	
        return $this->render('index',
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
