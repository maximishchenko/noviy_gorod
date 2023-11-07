<?php

namespace frontend\modules\content\controllers;

use backend\modules\content\models\Commercial as ModelsCommercial;
use frontend\modules\content\models\Commercial;
use frontend\controllers\BaseController;
use frontend\modules\content\models\Premise;
use Yii;

class CommercialController extends BaseController
{
    public function actionIndex()
    {
        $activeItemId = Yii::$app->configManager->getItemValue('contentCommercialStage');

        $activeItem = Premise::find()->active()->activeItem($activeItemId)->one();
        $stages = Premise::find()->active()->onlyCommercial()->stages($activeItemId)->all();
        return $this->render('index', ['activeItem' => $activeItem, 'stages' => $stages]);
    }
}