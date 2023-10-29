<?php

namespace backend\modules\catalog\models\query;

class LayoutQuery extends \yii\db\ActiveQuery
{
    public function all($db = null)
    {
        return parent::all($db);
    }

    public function one($db = null)
    {
        return parent::one($db);
    }

    public function minRooms()
    {
        return $this->min('count_rooms');
    }

    public function maxRooms()
    {
        return $this->max('count_rooms');
    }
}
