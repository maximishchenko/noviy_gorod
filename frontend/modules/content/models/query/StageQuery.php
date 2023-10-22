<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\StageQuery as backendStageQuery;
use common\models\Status;

class StageQuery extends backendStageQuery
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
