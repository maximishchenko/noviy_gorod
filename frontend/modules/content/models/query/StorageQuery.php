<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\StorageQuery as backendStorageQuery;
use common\models\Status;

class StorageQuery extends backendStorageQuery
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
