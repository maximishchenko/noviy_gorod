<?php

namespace frontend\modules\content\models\query;

use backend\modules\content\models\query\LeadQuery as backendLeadQuery;
use frontend\traits\activeOfferedQueryTrait;

class LeadQuery extends backendLeadQuery
{
    use activeOfferedQueryTrait;
}
