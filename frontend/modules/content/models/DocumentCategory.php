<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\DocumentCategory as backendDocumentCategory;
use common\models\Status;
use frontend\modules\content\models\query\DocumentCategoryQuery;
use frontend\modules\content\models\Document;

class DocumentCategory extends backendDocumentCategory
{

    public static function find()
    {
        return new DocumentCategoryQuery(get_called_class());
    }

    public function getDocuments()
    {
        return $this->hasMany(Document::class, ['category_id' => 'id'])->onCondition([Document::tableName() . '.status' => Status::STATUS_ACTIVE]);
    }
}
