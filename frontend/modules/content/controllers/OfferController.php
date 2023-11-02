<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Offer;

class OfferController extends BaseController
{
    public function actionIndex()
    {
        $offers = Offer::find()->active()->ordered()->all();

        return $this->render('index', ['offers' => $offers]);
    }
}