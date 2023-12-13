<?php

declare(strict_types=1);

namespace frontend\modules\content\controllers;


use frontend\controllers\BaseController;
use frontend\modules\content\models\Bank;

class PaymentController extends BaseController
{
    public function actionIndex(): string
    {
        $banks = Bank::find()->active()->all();
        return $this->render('index', ['banks' => $banks]);
    }

    public function actionMortgage(): string
    {
        $banks = Bank::find()->active()->all();
        return $this->render('mortgage', ['banks' => $banks]);
    }
}