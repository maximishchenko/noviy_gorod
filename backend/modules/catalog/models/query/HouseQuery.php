<?php
declare(strict_types=1);

namespace backend\modules\catalog\models\query;

class HouseQuery extends \yii\db\ActiveQuery
{
    public function all($db = null): array
    {
        return parent::all($db);
    }

    public function one($db = null): array
    {
        return parent::one($db);
    }
}
