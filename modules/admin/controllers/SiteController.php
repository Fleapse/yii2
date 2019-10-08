<?php

namespace app\modules\admin\controllers;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
