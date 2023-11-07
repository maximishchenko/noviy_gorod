<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\Commercial;
use backend\modules\content\models\Parking;
use backend\modules\content\models\query\PremiseQuery as backendPremiseQuery;
use backend\modules\content\models\Storage;
use frontend\traits\activeOfferedQueryTrait;

class PremiseQuery extends backendPremiseQuery
{
    use activeOfferedQueryTrait;

    public function onlyCommercial()
    {
        return $this->andWhere(['premise_type' => Commercial::TYPE]);
    }

    public function onlyStorage()
    {
        return $this->andWhere(['premise_type' => Storage::TYPE]);
    }

    public function onlyParking()
    {
        return $this->andWhere(['premise_type' => Parking::TYPE]);
    }

    public function activeItem($id)
    {
        return $this->andWhere(['id' => $id]);
    }

    public function stages($id)
    {
        return $this->andWhere(['<>', 'id', $id]);
    }
}
