<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\Gallery as backendGallery;
use frontend\modules\content\models\query\GalleryQuery;
use frontend\modules\content\models\GalleryUpload;
use frontend\traits\cacheParamsTrait;

class Gallery extends backendGallery
{
    use cacheParamsTrait;

    public static function find()
    {
        return new GalleryQuery(get_called_class());
    }

    public function getUploads()
    {
        return $this->hasMany(GalleryUpload::class, ['gallery_id' => 'id'])->orderBy([GalleryUpload::tableName().'.sort' => SORT_ASC]);
    }
}
