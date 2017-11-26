<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Evidences;
use app\modules\admin\models\Sms;
use app\modules\admin\models\Requests;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * EvidencesController implements the CRUD actions for Evidences model.
 */
class FrontendController extends Controller
{
    //public $layout = "";
    public function actionIndex()
    {
        $tableR = Requests::find(); 
        $tableE = Evidences::find();
        
        $dataProviderR = $tableR->asArray()->select('addr AS Adres, num, time, channel')->all();
        $dataProviderE = $tableE->asArray()->limit(7)->all();

        

        return $this->renderPartial('index',[
                'dataProviderE' => $dataProviderE,
                'dataProviderR' => $dataProviderR,
                
            ]);
    }
    
    public function actionInde()
    {
        
            //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $tableE = Evidences::find();
        
        $dataProviderE = $tableE->asArray()->limit(7)->all();
        //echo $dataProviderE;
      
        return $this->renderPartial('inde',[
            'dataProviderE' => $dataProviderE,
        ]);
    }
    
    public function actionTake(){
        $tableE = Evidences::find();
        
        $dataProviderE = $tableE->asArray()->limit(7)->all();
        return $dataProviderE;
    }
    
}