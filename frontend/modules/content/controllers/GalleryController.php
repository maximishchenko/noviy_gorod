<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\search\GallerySearch;

class GalleryController extends BaseController
{
    public function actionIndex()
    {
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}