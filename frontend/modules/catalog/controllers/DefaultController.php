<?php

namespace frontend\modules\catalog\controllers;

use frontend\modules\catalog\models\search\ApartmentSearch;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new ApartmentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view');
    }
}
