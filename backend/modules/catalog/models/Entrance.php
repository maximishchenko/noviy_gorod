<?php

namespace backend\modules\catalog\models;

use backend\modules\catalog\models\query\EntranceQuery;
use common\models\Sort;
use common\models\Status;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%entrance}}".
 *
 * @property int $id
 * @property int|null $house_id
 * @property string|null $number
 * @property int|null $count_foors
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property House $house
 * @property Layout[] $layouts
 */
class Entrance extends \yii\db\ActiveRecord
{

    const NAME_PREFIX = 'Подъезд ';

    public static function tableName()
    {
        return '{{%entrance}}';
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
            [['house_id', 'count_foors', 'number', 'sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['comment'], 'string'],
            [['house_id'], 'exist', 'skipOnError' => true, 'targetClass' => House::class, 'targetAttribute' => ['house_id' => 'id']],
            
            ['sort', 'default', 'value' => Sort::DEFAULT_SORT_VALUE],
            ['status', 'in', 'range' => array_keys(Status::getStatusesArray())],

            [['number', 'count_foors', 'house_id'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'house_id' => Yii::t('app', 'Entrance House ID'),
            'number' => Yii::t('app', 'Entrance Number'),
            'count_foors' => Yii::t('app', 'Count Foors'),
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
            'number' => Yii::t('app', 'Entrance Number Hint'),
            'house_id' => Yii::t('app', 'Entrance House ID Hint'),
            'count_foors' => Yii::t('app', 'Entrance Count Floors Hint'),
            'comment' => Yii::t('app', 'Comment Hint'),
            'sort' => Yii::t('app', 'Sort Hint. Default value is {sortDefault}', ['sortDefault' => Sort::DEFAULT_SORT_VALUE]),
            'status' => Yii::t('app', 'Status Hint'),
        ];
    }

    public function getHouse()
    {
        return $this->hasOne(House::class, ['id' => 'house_id']);
    }

    public function getLayouts()
    {
        return $this->hasMany(Layout::class, ['entrance_id' => 'id']);
    }

    public static function find()
    {
        return new EntranceQuery(get_called_class());
    }

    public function getHousesItems()
    {
        $houses = House::find()->orderBy(['name' => SORT_ASC])->all();
        return ArrayHelper::map($houses,'id','nameWithPrefix');
    }

    public function getNumberWithPrefix()
    {
        return self::NAME_PREFIX . " " . $this->number;
    }
}
