<?php

declare(strict_types=1);

namespace backend\modules\content\models\query;

use yii\db\ActiveQuery;

class PremiseQuery extends ActiveQuery
{
    public string $premise_type;

    public function prepare($builder): ActiveQuery
    {
        if ($this->premise_type !== null) {
            $this->andWhere(['premise_type' => $this->premise_type]);
        }
        return parent::prepare($builder);
    }
}
