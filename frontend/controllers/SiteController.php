<?php

namespace frontend\controllers;

use common\models\Status;
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
        return $this->render('index', ['stage' => $stageModel->getStage()]);
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
