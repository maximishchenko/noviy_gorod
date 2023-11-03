<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\Storage as backendStorage;
use frontend\modules\content\models\query\StorageQuery;

class Storage extends backendStorage
{
    public static function find()
    {
        return new StorageQuery(get_called_class());
    }
}
