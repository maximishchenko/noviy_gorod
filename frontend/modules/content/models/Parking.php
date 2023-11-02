<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\Parking as backendParking;

use frontend\modules\content\models\query\ParkingQuery as QueryParkingQuery;

class Parking extends backendParking
{
    public static function find()
    {
        return new QueryParkingQuery(get_called_class());
    }

    public function getThumb()
    {
        return '/' . self::UPLOAD_PATH . $this->image;
    }

    public function getLayoutThumb()
    {
        return '/' . self::UPLOAD_PATH . $this->layout_image;
    }
}
