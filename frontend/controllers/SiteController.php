<?php

namespace frontend\controllers;

use frontend\modules\catalog\models\Apartment;
use frontend\modules\content\models\Stage;

class SiteController extends BaseController
{

    /**
     * Главная страница
     * @return string
     */
    public function actionIndex(): string
    {
        $stageModel = new Stage();
        $apartmentModel = new Apartment();
        return $this->render('index', [
            'stage' => $stageModel->getStage(), 
            'apartmentModel' => $apartmentModel,
        ]);
    }

    /**
     * Политика обработки персональных данных
     * @return string
     */
    public function actionPolicy(): string
    {
        return $this->render('policy');
    }

    /**
     * Страница Контакты
     * @return string
     */
    public function actionContact(): string
    {
        return $this->render('contact');
    }
}
