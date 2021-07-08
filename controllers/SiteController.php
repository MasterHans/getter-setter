<?php

namespace app\controllers;

use app\components\Animal;
use app\components\Human;
use Yii;
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
        return $this->render('index');
    }

    /**
     * Non magic action.
     *
     * @return Response|string
     * @throws \Exception
     */
    public function actionNonMagic()
    {
        $human = new Human();
        $human->setArms(2);

        return $this->render('non-magic', ['human' => $human]);
    }

    /**
     * Magic action.
     *
     * @return string
     */
    public function actionMagic()
    {
        $human = new Human();
        $human->legs = 4;

        return $this->render('magic', ['human' => $human]);
    }

    /**
     * in Yii2.
     *
     * @return Response|string
     */
    public function actionInYii2()
    {
        $animal = new Animal();
        $animal->horns = 1;
        $animal->legs = 4;

        return $this->render('in-yii2', ['animal' => $animal]);
    }

}
