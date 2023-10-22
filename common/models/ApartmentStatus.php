<?php

namespace common\models;

use common\models\Status;
use Yii;

class ApartmentStatus extends Status
{
    const STATUS_ACTIVE = 'active';

    const STATUS_BLOCKED = 'blocked';

    const STATUS_RESERVED = 'reserved';

    public static function getStatusesArray(): array
    {
        return [
            self::STATUS_ACTIVE => Yii::t('app', 'Status Active'),
            self::STATUS_RESERVED => Yii::t('app', 'Status Reserved'),
            self::STATUS_BLOCKED => Yii::t('app', 'Status Blocked'),
        ];
    }
}