<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Premise;
use Yii;

class ParkingController extends BaseController
{
    public function actionIndex(): string
    {
        $activeItemId = Yii::$app->configManager->getItemValue('contentParkingStage');
        
        $activeItem = Premise::find()->active()->activeItem($activeItemId)->one();
        $stages = Premise::find()->active()->onlyParking()->stages($activeItemId)->all();
        return $this->render('index', ['activeItem' => $activeItem, 'stages' => $stages]);
    }
}