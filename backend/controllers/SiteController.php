<?php
namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => [ 'login', 'error' ],
                        'allow'   => true,
                    ],
                    [
                        'actions' => [ 'logout', 'index' ],
                        'allow'   => true,
                        'roles'   => [ '@' ],
                    ],
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'logout' => [ 'post' ],
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
        ];
    }

    public function actionIndex()
    {
        /*$phpVal = Yii::$app->YiiHeyComponent->currencyConvert( 'USD', 'PHP', 1 );
        print_r($phpVal);
        exit;*/
        return $this->render( 'index' );
    }

    public function actionLogin()
    {
        $this->layout = 'loginLayout';

        if( !\Yii::$app->user->isGuest ) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if( $model->load( Yii::$app->request->post() ) && $model->login() ) {
            return $this->goBack();
        } else {
            return $this->render( 'login', [
                'model' => $model,
            ] );
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
