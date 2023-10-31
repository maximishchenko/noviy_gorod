<?php

namespace frontend\modules\catalog\models;

use backend\modules\catalog\models\House as backendHouse;
use common\models\Status;
use frontend\modules\catalog\models\query\HouseQuery;
use frontend\traits\cacheParamsTrait;


class House extends backendHouse
{
    use cacheParamsTrait;

    public static function find()
    {
        return new HouseQuery(get_called_class());
    }

    public function getEntrances()
    {
        return $this->hasMany(Entrance::class, ['house_id' => 'id'])->onCondition([Entrance::tableName() . ".status" => Status::STATUS_ACTIVE]);
    }
}
