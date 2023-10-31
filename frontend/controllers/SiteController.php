<?php

namespace frontend\controllers;

use frontend\modules\catalog\models\Apartment;
use frontend\modules\content\models\Stage;

class SiteController extends BaseController
{

    public function actionIndex()
    {
        $stageModel = new Stage();
        $apartmentModel = new Apartment();
        return $this->render('index', ['stage' => $stageModel->getStage(), 'apartmentModel' => $apartmentModel]);
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
