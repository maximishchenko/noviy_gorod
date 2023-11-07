<?php

declare(strict_types=1);

namespace backend\modules\content\models\query;

class DocumentQuery extends \yii\db\ActiveQuery
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
