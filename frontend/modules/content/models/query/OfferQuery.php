<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\OfferQuery as backendOfferQuery;
use common\models\Status;

class OfferQuery extends backendOfferQuery
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
