<?php

declare(strict_types=1);

namespace backend\modules\content\models\query;

use yii\db\ActiveQuery;

class StageItemQuery extends ActiveQuery
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
