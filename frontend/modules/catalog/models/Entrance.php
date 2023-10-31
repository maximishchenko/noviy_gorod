<?php

namespace frontend\modules\catalog\models;

use backend\modules\catalog\models\Entrance as backendEntrance;
use common\models\Status;
use frontend\modules\catalog\models\query\EntranceQuery;
use frontend\traits\cacheParamsTrait;

class Entrance extends backendEntrance
{

    use cacheParamsTrait;

    public static function find()
    {
        return new EntranceQuery(get_called_class());
    }

    public function getLayouts()
    {
        return $this->hasMany(Layout::class, ['entrance_id' => 'id'])->onCondition([Layout::tableName() . ".status" => Status::STATUS_ACTIVE]);
    }
}
