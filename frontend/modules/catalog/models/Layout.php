<?php

namespace frontend\modules\catalog\models;

use frontend\modules\catalog\models\query\LayoutQuery;
use frontend\traits\cacheParamsTrait;
use backend\modules\catalog\models\Layout as backendLayout;

/**
 * This is the model class for table "{{%layout}}".
 *
 * @property int $id
 * @property int|null $entrance_id
 * @property string|null $image
 * @property int|null $count_rooms
 * @property float|null $total_area
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Layout extends backendLayout
{
    use cacheParamsTrait;

    const NO_IMAGE = '/static/sprite.svg#noimage';

    public static function find()
    {
        return new LayoutQuery(get_called_class());
    }

    public function getThumb(): string
    {
        return (isset($this->image) && !empty($this->image)) ? '/' . static::UPLOAD_PATH . $this->image : static::NO_IMAGE;
    }
}
