<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Offer;
use yii\web\NotFoundHttpException;

class OfferController extends BaseController
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function actionIndex(): string
    {
        $activeOffers = Offer::getActiveOffer();
        if ($activeOffers) {
            return $this->render('index', ['offers' => $activeOffers]);
        }
        throw new NotFoundHttpException("Запрошенная страница не найдена");
    }
}