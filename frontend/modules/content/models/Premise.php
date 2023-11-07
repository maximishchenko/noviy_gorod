<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\Premise as backendPremise;
use backend\modules\content\models\Parking as backendParking;
use backend\modules\content\models\Commercial as backendCommercial;
use backend\modules\content\models\Storage as backendStorage;

use frontend\modules\content\models\Parking;
use frontend\modules\content\models\Commercial;
use frontend\modules\content\models\query\PremiseQuery;
use frontend\modules\content\models\Storage;

class Premise extends backendPremise
{

    public static function find()
    {
        return new PremiseQuery(get_called_class());
    }
    
    public static function instantiate($row)
    {
        switch ($row['premise_type']) {
            case backendParking::TYPE:
                return new Parking();
            case backendCommercial::TYPE:
                return new Commercial();
            case backendStorage::TYPE:
                return new Storage();
            default:
            return new self;
        }
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