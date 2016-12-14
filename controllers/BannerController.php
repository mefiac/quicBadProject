<?php

namespace app\controllers;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
class BannerController extends \yii\web\Controller
{
    public $response;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {

        return $this->render('addBaner');
    }
    public function actionLoad()
    {
       $data= Yii::$app->request->get();
var_dump($data); die;
    }
    public function actionSave()
    {
        $filenames = 'documents/' . date('s') . md5($_FILES['uploadfile']['tmp_name']) . '/';
        $zip = new \ZipArchive();
        if ($zip->open($_FILES['uploadfile']['tmp_name']) === TRUE) {

            $zip->extractTo($filenames);

            $zip->close();
            if (file_exists($filenames . 'index.html')) {
                return $filenames . 'index.html';

            } else {
                return false;
            }
        } else {
            $dir = 'documents/' . date('s') . md5($_FILES['uploadfile']['tmp_name']) . '/';
            mkdir($dir, 0777, true);
            $filename = $dir
                . $_FILES['uploadfile']['name'];
            if (!move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filename)) return false;

            return $filename;
        }

    }

}
