<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Premise;
use Yii;

class StorageController extends BaseController
{
    public function actionIndex()
    {
        $activeItemId = Yii::$app->configManager->getItemValue('contentStorageStage');
        
        $activeItem = Premise::find()->active()->activeItem($activeItemId)->one();
        $stages = Premise::find()->active()->onlyStorage()->stages($activeItemId)->all();

        return $this->render('index', ['activeItem' => $activeItem, 'stages' => $stages]);
    }
}