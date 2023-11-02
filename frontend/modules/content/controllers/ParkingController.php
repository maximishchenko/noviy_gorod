<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Parking;

class ParkingController extends BaseController
{
    public function actionIndex()
    {
        $activeItemId = 1;

        $activeItem = Parking::find()->active()->where(['id' => $activeItemId])->one();
        return $this->render('index', ['activeItem' => $activeItem]);
    }
}