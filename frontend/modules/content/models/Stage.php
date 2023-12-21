<?php
declare(strict_types=1);

namespace frontend\modules\content\models;

use backend\modules\content\models\Stage as backendStage;
use common\models\Status;
use frontend\modules\content\models\query\StageQuery;
use frontend\traits\cacheParamsTrait;
use Yii;

class Stage extends backendStage
{
    use cacheParamsTrait;

    public static function find(): StageQuery
    {
        return new StageQuery(get_called_class());
    }

    /**
     * @return string
     */
    public function getBackground(): string
    {
        return '/' . static::UPLOAD_PATH . $this->image;
    }

    public function getStage()
    {
        $stageId = Yii::$app->configManager->getItemValue('contentMainStage');
//        return Stage::getDb()->cache(function () use ($stageId) {
            return Stage::find()
                ->with('stageItems')
                ->where(['id' => $stageId, 'status' => Status::STATUS_ACTIVE])
                ->orderBy(['sort' => SORT_ASC])
                ->one();
//        },
//            Stage::getCacheDuration(),
//            Stage::getCacheDependency()
//        );
    }

    public function getStageItems(): yii\db\ActiveQuery
    {
        $stageItemsLimit = Yii::$app->configManager->getItemValue('contentMainStageMaxItemsCount');
        return StageItem::getDb()->cache(function() use ($stageItemsLimit) {
                return $this->hasMany(StageItem::class, ['stage_id' => 'id'])
                    ->orderBy([StageItem::tableName() . '.sort' => SORT_ASC])
                    ->onCondition([StageItem::tableName() . '.status' => Status::STATUS_ACTIVE])
                    ->limit($stageItemsLimit);
        });
    }
}