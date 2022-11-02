<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;


class MainController extends Controller
{

    public function actionForm()
    {
        return $this->render('form');
        
    }

   


}