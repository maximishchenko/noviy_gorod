<?php

namespace frontend\modules\content\models;

use frontend\modules\content\models\query\GalleryUploadQuery;
use backend\modules\content\models\GalleryUpload as backendGalleryUpload;
use frontend\modules\content\models\Gallery;

class GalleryUpload extends backendGalleryUpload
{

    public function getGallery()
    {
        return $this->hasOne(Gallery::class, ['id' => 'gallery_id']);
    }
    
    public static function find()
    {
        return new GalleryUploadQuery(get_called_class());
    }

    public function getImage()
    {
        return '/' . self::UPLOAD_PATH . $this->file_name;
    }
}
