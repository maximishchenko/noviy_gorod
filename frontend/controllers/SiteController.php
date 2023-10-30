<?php

namespace frontend\controllers;

use common\models\Status;
use frontend\modules\catalog\models\Apartment;
use frontend\modules\content\models\Stage;
use frontend\modules\content\models\StageItem;
use Yii;

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
