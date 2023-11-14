<?php

namespace frontend\modules\catalog\models;

use backend\modules\catalog\models\House as backendHouse;
use common\models\Status;
use frontend\modules\catalog\models\query\HouseQuery;
use frontend\traits\cacheParamsTrait;
use yii\db\ActiveQuery;

class House extends backendHouse
{
    use cacheParamsTrait;

    public static function find(): HouseQuery
    {
        return new HouseQuery(get_called_class());
    }

    public function getEntrances(): ActiveQuery
    {
        return $this->hasMany(Entrance::class, ['house_id' => 'id'])->onCondition([Entrance::tableName() . ".status" => Status::STATUS_ACTIVE]);
    }
}
