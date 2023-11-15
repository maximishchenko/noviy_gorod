<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Premise;
use Yii;

class StorageController extends BaseController
{
    /**
     * @return string
     */
    public function actionIndex(): string
    {
        $activeItemId = Yii::$app->configManager->getItemValue('contentStorageStage');
        
        $activeItem = Premise::find()->active()->activeItem($activeItemId)->one();
        $stages = Premise::find()->active()->onlyStorage()->stages($activeItemId)->all();

        return $this->render('index', ['activeItem' => $activeItem, 'stages' => $stages]);
    }
}