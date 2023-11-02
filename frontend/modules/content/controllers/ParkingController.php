<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;

class ParkingController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}