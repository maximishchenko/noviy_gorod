<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Offer;

class OfferController extends BaseController
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function actionIndex(): string
    {
        $offers = Offer::getDb()->cache(function() {
            return Offer::find()->active()->ordered()->all();
        }, Offer::getCacheDuration(), Offer::getCacheDependency());

        return $this->render('index', ['offers' => $offers]);
    }
}