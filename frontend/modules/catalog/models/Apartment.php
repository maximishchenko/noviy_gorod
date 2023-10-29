<?php

namespace frontend\modules\catalog\models;

use backend\modules\catalog\models\Apartment as backendApartment;
use backend\modules\catalog\models\Entrance;
use backend\modules\catalog\models\House;
use backend\modules\catalog\models\Layout;
use backend\modules\catalog\models\query\LayoutQuery;
use common\models\Status;
use frontend\modules\catalog\models\query\ApartmentQuery;
use frontend\traits\cacheParamsTrait;
use Yii;

/**
 * This is the model class for table "{{%apartment}}".
 *
 * @property int $id
 * @property int $layout_id
 * @property int $apartment_floor
 * @property string|null $image
 * @property string|null $status
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Layout $layout
 */
class Apartment extends backendApartment
{
    use cacheParamsTrait;

    const NO_IMAGE = '/static/sprite.svg#noimage';
    
    public static function find()
    {
        return new ApartmentQuery(get_called_class());
    }

    public function getMinRoomsCount(): int
    {
        return $this->getRooms()->minRooms();
    }

    public function getMaxRoomsCount(): int
    {
        return $this->getRooms()->maxRooms();
    }

    public function getMinTotalArea(): int
    {
        return round($this->getTotalArea()->min('total_area'), 0, PHP_ROUND_HALF_DOWN);
    }

    public function getMaxTotalArea(): int
    {
        return round($this->getTotalArea()->max('total_area'), 0, PHP_ROUND_HALF_UP);
    }

    public function getHouses(): array
    {
        return House::getDb()->cache(function() {
            return House::find()->where(['status' => Status::STATUS_ACTIVE])->all();
        }, House::getCacheDuration(), House::getCacheDependency());
    }

    public function isCountRoomsChecked(int $countRooms): ?string
    {
        $queryParams = Yii::$app->request->queryParams;
        if (isset($queryParams) && !empty($queryParams) && $queryParams['countRooms'] == $countRooms) {
            return 'checked';
        }
        return null;
    }

    public function getThumb(): string
    {
        return (isset($this->image) && !empty($this->image)) ? '/' . static::UPLOAD_PATH . $this->image : static::NO_IMAGE;
    }

    public function getEntrance()
    {
        return $this->hasOne(Entrance::class, ['id' => 'entrance_id'])->viaTable(Layout::tableName(), ['id' => 'layout_id']);
    }

    public function getHouse()
    {
        return $this->hasOne(House::class, ['id' => 'house_id'])->via('entrance');
    }

    protected function getRooms(): LayoutQuery
    {
        return Layout::getDb()->cache(function() {
            return Layout::find()->select(['count_rooms'])->where(['status' => Status::STATUS_ACTIVE]);
        }, Layout::getCacheDuration(), Layout::getCacheDependency());
    }

    protected function getTotalArea(): LayoutQuery
    {
        return Layout::getDb()->cache(function() {
            return Layout::find()->select(['total_area'])->where(['status' => Status::STATUS_ACTIVE]);
        }, Layout::getCacheDuration(), Layout::getCacheDependency());
    }
}
