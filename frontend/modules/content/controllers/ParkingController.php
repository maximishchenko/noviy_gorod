<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Parking;
use Yii;

class ParkingController extends BaseController
{
    public function actionIndex()
    {
        $activeItemId = Yii::$app->configManager->getItemValue('contentParkingStage');

        $activeItem = Parking::find()->active()->where(['id' => $activeItemId])->one();
        return $this->render('index', ['activeItem' => $activeItem]);
    }
}