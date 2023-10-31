<?php

namespace frontend\modules\catalog\models;

use frontend\modules\catalog\models\query\LayoutQuery;
use frontend\traits\cacheParamsTrait;
use backend\modules\catalog\models\Layout as backendLayout;

class Layout extends backendLayout
{
    use cacheParamsTrait;

    const NO_IMAGE = '/static/sprite.svg#noimage';

    public static function find()
    {
        return new LayoutQuery(get_called_class());
    }

    public function getThumb(): string
    {
        return (isset($this->image) && !empty($this->image)) ? '/' . static::UPLOAD_PATH . $this->image : static::NO_IMAGE;
    }

    // public function getApartment($floor)
    // {
    //     return $this->hasOne(Apartment::class, ['id' => 'layout_id'])->onCondition(['apartment_floor' => $floor])->one();
    // }
}
