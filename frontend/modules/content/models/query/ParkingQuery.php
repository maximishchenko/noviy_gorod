<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\ParkingQuery as backendParkingQuery;
use common\models\Status;

class ParkingQuery extends backendParkingQuery
{
    public function active()
    {
        return $this->andWhere(['status' => Status::STATUS_ACTIVE]);
    }

    public function ordered()
    {
        return $this->orderBy(['sort' => SORT_ASC]);
    }
}
