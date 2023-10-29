<?php

namespace frontend\modules\catalog\models\query;

use backend\modules\catalog\models\query\ApartmentQuery as backendApartment;
use common\models\ApartmentStatus;
use frontend\modules\catalog\models\Apartment;

class ApartmentQuery extends backendApartment
{
    public function active()
    {
        return $this->andWhere([Apartment::tableName() . '.status' => ApartmentStatus::STATUS_ACTIVE]);
    }
}
