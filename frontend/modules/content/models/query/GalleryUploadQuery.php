<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\GalleryUploadQuery as backendGalleryUploadQuery;
use common\models\Status;

class GalleryUploadQuery extends backendGalleryUploadQuery
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
