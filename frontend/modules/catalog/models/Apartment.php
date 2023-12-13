<?php

namespace frontend\modules\catalog\models;

use backend\modules\catalog\models\Apartment as backendApartment;
use backend\modules\catalog\models\Entrance;
use frontend\modules\catalog\models\House;
use common\models\ApartmentStatus;
use frontend\modules\catalog\models\Layout;
use frontend\modules\catalog\models\query\LayoutQuery;
use common\models\Status;
use frontend\modules\catalog\models\query\ApartmentQuery;
use frontend\traits\cacheParamsTrait;
use Yii;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

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
 * @property-read \frontend\modules\catalog\models\query\LayoutQuery $totalArea
 * @property-read int $minTotalArea
 * @property-read \yii\db\ActiveQuery $entrance
 * @property-read array $houses
 * @property-read int $maxTotalArea
 * @property-read null|string $maxRoomsCount
 * @property-read string $houseNameById
 * @property-read \frontend\modules\catalog\models\House|null $activeHouses
 * @property-read \yii\db\ActiveQuery $house
 * @property-read array $apartmentroomsCount
 * @property-read string $thumb
 * @property-read \frontend\modules\catalog\models\query\LayoutQuery $rooms
 * @property-read null|string $minRoomsCount
 * @property Layout $layout
 */
class Apartment extends backendApartment
{
    use cacheParamsTrait;

    const NO_IMAGE = '/static/sprite.svg#noimage';
    
    public static function find(): ApartmentQuery
    {
        return new ApartmentQuery(get_called_class());
    }

    public function getMinRoomsCount(): ?string
    {
        return $this->getRooms()->minRooms();
    }

    public function getMaxRoomsCount(): ?string
    {
        return $this->getRooms()->maxRooms();
    }

    public function getLayout(): ActiveQuery
    {
        return $this->hasOne(Layout::class, ['id' => 'layout_id']);
    }

    public function getMinTotalArea(): int
    {
        return round($this->getTotalArea()->min('total_area'), 0, PHP_ROUND_HALF_DOWN);
    }

    public function getMaxTotalArea(): int
    {
        return round($this->getTotalArea()->max('total_area'), 0, PHP_ROUND_HALF_UP);
    }

    public static function getMinArea(): ?float
    {
        $params = Yii::$app->request->queryParams;
        return (!empty($params['minArea'])) ? $params['minArea'] : null;
    }

    public static function getMaxArea(): ?float
    {
        $params = Yii::$app->request->queryParams;
        return (!empty($params['maxArea'])) ? $params['maxArea'] : null;
    }

    public function getHouses(): array
    {
        return House::getDb()->cache(function() {
            return House::find()->where(['status' => Status::STATUS_ACTIVE])->all();
        }, House::getCacheDuration(), House::getCacheDependency());
    }

    public function getHouseNameById(): string
    {
        $house = null;
        $queryParams = Yii::$app->request->queryParams;
        if (!empty($queryParams['house'])) {
            $house = House::find()->where(['id' => $queryParams['house']])->one();
        }
        if ($house !== null) {
            return 'Литер ' . $house->name;
        }
        return 'Выберите литер';
    }

    public function isCountRoomsChecked(?int $countRooms): ?string
    {
        $queryParams = Yii::$app->request->queryParams;
        if (!empty($queryParams['countRooms']) && $queryParams['countRooms'] == $countRooms) {
            return 'checked';
        }
        return null;
    }

    public function getThumb(): string
    {
        return (isset($this->image) && !empty($this->image)) ? '/' . static::UPLOAD_PATH . $this->image : static::NO_IMAGE;
    }

    public function getEntrance(): ActiveQuery
    {
        return $this->hasOne(Entrance::class, ['id' => 'entrance_id'])->viaTable(Layout::tableName(), ['id' => 'layout_id']);
    }

    public function getHouse(): ActiveQuery
    {
        return $this->hasOne(House::class, ['id' => 'house_id'])->via('entrance');
    }

    public function getApartmentsByFloorAndLayout(int $floor, int $layout_id): Apartment
    {
        return self::getDb()->cache(function() use ($floor, $layout_id) {
            return self::find()->active()->where(['apartment_floor' => $floor, 'layout_id' => $layout_id])->one();
        }, self::getCacheDuration(), self::getCacheDependency());
    }

    public function getApartmentsByCountRooms(int $countRooms): array
    {
        return self::getDb()->cache(function() use ($countRooms) {
            return self::find()->where([self::tableName() . '.status' => Status::STATUS_ACTIVE, Layout::tableName() . '.count_rooms' => $countRooms])->joinWith(['layout'])->all();
        }, self::getCacheDuration(), self::getCacheDependency());
    }

    public function getActiveHouses(): ?House
    {
        return House::getDb()->cache(function () {
            return House::find()->active()->orderBy(['id' => SORT_ASC])->one();
        }, House::getCacheDuration(), House::getCacheDependency());
    }

    public function getApartmentroomsCount(): array
    {
        $rooms = Layout::getDb()->cache(function() {
            return Layout::find()->select(['count_rooms'])->distinct()->asArray()->all();
        }, Layout::getCacheDuration(), Layout::getCacheDependency());
        $rooms = ArrayHelper::getColumn($rooms, 'count_rooms');
        return $rooms;
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
