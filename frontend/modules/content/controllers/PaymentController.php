<?php

declare(strict_types=1);

namespace frontend\modules\content\controllers;


use frontend\controllers\BaseController;

class PaymentController extends BaseController
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionMortgage(): string
    {
        return $this->render('mortgage');
    }
}