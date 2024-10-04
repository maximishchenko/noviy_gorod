<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\catalog\models\House;
use frontend\modules\content\models\search\GallerySearch;

class GalleryController extends BaseController
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function actionIndex(): string
    {
        $houses = House::find()->active()->galleryOrdered()->all();

        return $this->render('index', [
            'houses' => $houses
        ]);
    }
}