<?php

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Offer;
use Yii;
use yii\web\NotFoundHttpException;

class OfferController extends BaseController
{
    public function actionIndex()
    {
        $offers = Offer::find()->active()->ordered()->all();

        return $this->render('index', ['offers' => $offers]);
    }

    public function actionView($slug)
    {
        $model = $this->findModelBySlug($slug);
        return $this->render('view', ['model' => $model]);
    }

    protected function findModelBySlug($slug)
    {
        // $model = Apartment::getDb()->cache(function() use ($slug) {
            // return Apartment::findOne(['slug' => $slug]);
        // }, Apartment::getCacheDuration(), Apartment::getCacheDependency());
        $model = Offer::findOne(['slug' => $slug]);
        if ($model !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}