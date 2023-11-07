<?php

namespace backend\modules\content\controllers;

use backend\modules\content\models\Parking;
use backend\modules\content\models\search\ParkingSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ParkingController extends Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $searchModel = new ParkingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Parking();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Record added'));
                return $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Record changed'));
            return $this->refresh();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('danger', Yii::t('app', 'Record deleted'));

        return $this->redirect(['index']);
    }

    public function actionDeleteImage(int $id)
    {
        $model = $this->findModel($id);
        $file = $model->getPath(Parking::UPLOAD_PATH, $model->image);
        $model->removeSingleFileIfExist($file);
        $model->image = null;
        $model->save();
        Yii::$app->session->setFlash('danger', Yii::t('app', 'Record deleted'));
        return $this->redirect(Yii::$app->request->referrer);
    }  

    public function actionDeleteLayoutImage(int $id)
    {
        $model = $this->findModel($id);
        $file = $model->getPath(Parking::UPLOAD_PATH, $model->layout_image);
        $model->removeSingleFileIfExist($file);
        $model->layout_image = null;
        $model->save();
        Yii::$app->session->setFlash('danger', Yii::t('app', 'Record deleted'));
        return $this->redirect(Yii::$app->request->referrer);
    }  

    public function actionSetDefaultItem($id)
    {
        $configManager = Yii::$app->get('configManager');
        $configManager->setItemValues(['contentParkingStage' => $id]);
        $configManager->saveValues();
        Yii::$app->session->setFlash('success', Yii::t('app', 'Parking updated'));
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionClearStage()
    {
        $configManager = Yii::$app->get('configManager');
        $configManager->setItemValues(['contentParkingStage' => ""]);
        $configManager->saveValues();
        Yii::$app->session->setFlash('warning', Yii::t('app', 'Parking disabled'));
        return $this->redirect(Yii::$app->request->referrer);
    }
      

    // public function actionAdvantages($id)
    // {
    //     $model = $this->findModel($id);
    //     $searchModel = new DocumentSearch();
    //     $dataProvider = $searchModel->search($id, $this->request->queryParams);

    //     return $this->render('document/index', [
    //         'model' => $model,
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    protected function findModel($id)
    {
        if (($model = Parking::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
