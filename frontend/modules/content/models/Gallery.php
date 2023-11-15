<?php
declare(strict_types=1);

namespace frontend\modules\content\models;

use backend\modules\content\models\Gallery as backendGallery;
use frontend\modules\content\models\query\GalleryQuery;
use frontend\traits\cacheParamsTrait;
use yii\db\ActiveQuery;

class Gallery extends backendGallery
{
    use cacheParamsTrait;

    /**
     * @return GalleryQuery
     */
    public static function find(): GalleryQuery
    {
        return new GalleryQuery(get_called_class());
    }

    /**
     * @return ActiveQuery
     */
    public function getUploads(): ActiveQuery
    {
        return $this->hasMany(GalleryUpload::class, ['gallery_id' => 'id'])->orderBy([GalleryUpload::tableName().'.sort' => SORT_ASC]);
    }
}
