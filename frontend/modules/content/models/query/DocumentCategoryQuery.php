<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\DocumentCategoryQuery as backendDocumentCategoryQuery;
use common\models\Status;

class DocumentCategoryQuery extends backendDocumentCategoryQuery
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
