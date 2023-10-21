<?php

namespace frontend\controllers;


class SiteController extends BaseController
{

    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPolicy()
    {
        return $this->render('policy');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }
}
