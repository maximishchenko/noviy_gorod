<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\CommercialQuery as backendCommercialQuery;
use common\models\Status;

class CommercialQuery extends backendCommercialQuery
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
