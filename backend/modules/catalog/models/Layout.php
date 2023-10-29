<?php

namespace backend\modules\catalog\models;

use backend\modules\catalog\models\query\LayoutQuery;
use backend\traits\fileTrait;
use common\models\Sort;
use frontend\traits\cacheParamsTrait;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

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
 *
 * @property Apartment[] $apartments
 * @property Entrance $entrance
 */
class Layout extends \yii\db\ActiveRecord
{
    use fileTrait;

    use cacheParamsTrait;

    const UPLOAD_PATH = 'upload/layout/';

    public $imageFile;
    
    public static function tableName()
    {
        return '{{%layout}}';
    }
    
    public function behaviors()
    {
        return[
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => function () {
                    return date('U');
                },
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }  

    public function rules()
    {
        return [
            [['entrance_id', 'count_rooms', 'sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['total_area'], 'number'],
            [['comment'], 'string'],
            [['entrance_id'], 'exist', 'skipOnError' => true, 'targetClass' => Entrance::class, 'targetAttribute' => ['entrance_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'entrance_id' => Yii::t('app', 'Layout Entrance ID'),
            'nameWithCountRoomsAndTotalArea' => Yii::t('app', 'Name with count rooms and total area'),
            'house' => Yii::t('app', 'House of Layout'),
            'entrance' => Yii::t('app', 'Entrance of Layout'),
            'image' => Yii::t('app', 'Image'),
            'imageFile' => Yii::t('app', 'Layout Image'),
            'count_rooms' => Yii::t('app', 'Layout Count Rooms'),
            'total_area' => Yii::t('app', 'Layout Total Area'),
            'comment' => Yii::t('app', 'Comment'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    public function attributeHints()
    {
        return [
            'entrance_id' => Yii::t('app', 'Layout Entrance ID'),
            'count_rooms' => Yii::t('app', 'Layout Count Rooms Hint'),
            'total_area' => Yii::t('app', 'Layout Total Area Hint'),
            'comment' => Yii::t('app', 'Comment Hint'),
            'sort' => Yii::t('app', 'Sort Hint. Default value is {sortDefault}', ['sortDefault' => Sort::DEFAULT_SORT_VALUE]),
            'status' => Yii::t('app', 'Status Hint'),
        ];
    }

    public function getApartments()
    {
        return $this->hasMany(Apartment::class, ['layout_id' => 'id']);
    }

    public function getEntrance()
    {
        return $this->hasOne(Entrance::class, ['id' => 'entrance_id']);
    }

    public function getHouse()
    {
        return $this->hasOne(House::class, ['id' => 'house_id'])->viaTable(Entrance::tableName(), ['id' => 'entrance_id']);
    }

    public function getNameWithCountRoomsAndTotalArea()
    {
        return Yii::t('app', '{count_rooms} - suffix {total_area}', ['count_rooms' => $this->count_rooms, 'total_area' => $this->total_area]);
    }

    public function getNameWithHouseAndSection()
    {
        return Yii::t('app', 'House {house_name}, entrance {entrance_number}, {count_rooms} - suffix {total_area}', ['house_name' => $this->house->name, 'entrance_number' => $this->entrance->number, 'count_rooms' => $this->count_rooms, 'total_area' => $this->total_area]);
    }

    public static function find()
    {
        return new LayoutQuery(get_called_class());
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->uploadFile('imageFile', 'image', self::UPLOAD_PATH);
            return true;
        }
        return false;
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $this->deleteSingleFile('image', self::UPLOAD_PATH);
            return true;
        } else {
            return false;
        }
    }
}
