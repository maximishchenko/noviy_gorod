<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;

class OfferController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($slug)
    {
        return $this->render('view');
    }
}