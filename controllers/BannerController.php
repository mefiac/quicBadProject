<?php

namespace app\controllers;

class BannerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {

        return $this->render('addBaner');
    }

}
