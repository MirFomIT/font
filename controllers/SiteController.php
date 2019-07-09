<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\Color;
use app\models\Family;
use app\models\Size;
use app\models\Style;
use app\models\User;
use app\models\Weight;
use Yii;
use yii\base\Widget;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
    public function actionIndex()
    {

        $families = Family::find()->asArray()->all();
        $weights = Weight::find()->asArray()->all();
        $styles = Style::find()->asArray()->all();
        $sizes = Size::find()->asArray()->all();


        return $this->render('index', compact('families', 'weights','styles','sizes'));
    }


}
