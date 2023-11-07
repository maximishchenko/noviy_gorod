<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\OfferQuery as backendOfferQuery;
use frontend\traits\activeOfferedQueryTrait;

class OfferQuery extends backendOfferQuery
{
    use activeOfferedQueryTrait;
}
