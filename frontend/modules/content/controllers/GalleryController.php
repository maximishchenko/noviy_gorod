<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\catalog\models\House;
use frontend\modules\content\models\search\GallerySearch;
use Yii;
use yii\web\NotFoundHttpException;

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

    public function actionView($id)
    {
        $house = $this->findModel($id);
        return $this->render('view', [
            'house' => $house,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = House::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}