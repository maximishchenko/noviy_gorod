<?php

namespace frontend\modules\content\models;

use frontend\modules\content\models\query\DocumentQuery;
use frontend\modules\content\models\DocumentCategory;
use backend\modules\content\models\Document as backendDocument;


class Document extends backendDocument
{
    public function getCategory()
    {
        return $this->hasOne(DocumentCategory::class, ['id' => 'category_id']);
    }

    public static function find()
    {
        return new DocumentQuery(get_called_class());
    }

    public function getFilePath()
    {
        return "/" . self::UPLOAD_PATH . $this->file_name;
    }
}
