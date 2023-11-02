<?php

namespace frontend\modules\content\controllers;

use common\models\Status;
use frontend\controllers\BaseController;
use frontend\modules\content\models\DocumentCategory;

class DocumentController extends BaseController
{
    public function actionIndex()
    {
        $categories = DocumentCategory::find()->where(['status' => Status::STATUS_ACTIVE])->orderBy(['sort' => SORT_ASC])->all();
        return $this->render('index', [
            'categories' => $categories,
        ]);
    }
}