<?php

namespace app\controllers;

use app\models\FormDataArray;
use app\models\FormDataProps;
use yii\bootstrap\Modal;
use yii\web\Controller;




class MainController extends Controller
{

    public function actionIndex(){
            $table = new FormDataArray();
            $model = new FormDataProps();
            
            $type = $table->type;
            $months = $table->months;
            $tonnage = $table->tonnage;
            $price = $table->price;
            
            if ($model->load(\Yii::$app->request->post())) {
                $selectType = $type[$model['type']];
                $selectTonnage = $tonnage[$model['tonnage']];
                $selectMonths = $months[$model['months']];
                
                $costValue = $price[$model["type"]][$model["tonnage"]][$model["months"]];
                return $this->render('index', [
                    'type' => $type,
                    'tonnage' => $tonnage,
                    'months' => $months,
                    'price' => $price, 
                    'model' => $model,
                    'costValue' => $costValue,
                    'selectType' => $selectType,
                    'selectMonths' => $selectMonths,
                    'selectTonnage' => $selectTonnage,
            
                ]);
            }
 
            if (!$model->load(\Yii::$app->request->post())) {
 
                 return $this->render('index', [
                     'type' => $type,
                     'tonnage' => $tonnage,
                     'months' => $months,
                     'price' => $price, 
                     'model' => $model,
                     'costValue' => ' '
                 ]);
             }
    }
    
   
}