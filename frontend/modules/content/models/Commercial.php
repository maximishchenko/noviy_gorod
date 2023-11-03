<?php

namespace backend\modules\content\models;

use backend\modules\content\models\Commercial as backendCommercial;
use frontend\modules\content\models\query\CommercialQuery;

class Commercial extends backendCommercial
{
    public static function find()
    {
        return new CommercialQuery(get_called_class());
    }
}
