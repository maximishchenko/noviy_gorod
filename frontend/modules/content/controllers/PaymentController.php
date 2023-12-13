<?php

declare(strict_types=1);

namespace frontend\modules\content\controllers;


use frontend\controllers\BaseController;
use frontend\modules\content\models\Bank;
use frontend\modules\content\models\Mortgage;

class PaymentController extends BaseController
{
    public function actionIndex(): string
    {
        return $this->render('index', ['banks' => $this->getBanks()]);
    }

    public function actionMortgage(): string
    {
        $mortgages = Mortgage::getDb()->cache(function() {
            return Mortgage::find()->active()->all();
        }, Mortgage::getCacheDuration(), Mortgage::getCacheDependency());
        return $this->render('mortgage', ['banks' => $this->getBanks(), 'mortgages' => $mortgages]);
    }

    protected function getBanks()
    {
        $banks = Bank::getDb()->cache(function () {
            return Bank::find()->active()->all();
        }, Bank::getCacheDuration(), Bank::getCacheDependency());
        return $banks;
    }
}