<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;

class GalleryController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}