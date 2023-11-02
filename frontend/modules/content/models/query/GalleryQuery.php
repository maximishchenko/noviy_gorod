<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\GalleryQuery as backendGalleryQuery;
use common\models\Status;

class GalleryQuery extends backendGalleryQuery
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
