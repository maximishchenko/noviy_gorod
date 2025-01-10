<?php
declare(strict_types=1);

namespace frontend\modules\content\controllers;

use frontend\controllers\BaseController;
use frontend\modules\content\models\Projects;

class ProjectsController extends BaseController
{
    public function actionIndex(): string
    {
        $projects = Projects::find()->active()->all();
        return $this->render('index', ['projects' => $projects]);
    }
}