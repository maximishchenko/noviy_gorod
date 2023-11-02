<?php

namespace backend\modules\content\models;

use backend\modules\content\models\query\ParkingQuery;
use backend\traits\fileTrait;
use common\models\Sort;
use common\models\Status;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%parking}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $layout_image
 * @property string|null $description
 * @property string|null $callback_button_name
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Parking extends \yii\db\ActiveRecord
{

    use fileTrait;

    const UPLOAD_PATH = 'upload/parking/';

    public $imageFile;

    public $layoutImageFile;
    
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


    public static function tableName()
    {
        return '{{%parking}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'comment'], 'string'],
            [['sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'image', 'layout_image', 'callback_button_name'], 'string', 'max' => 255],
            
            [['name'], 'required'],
            [['name'], 'unique'],
            ['sort', 'default', 'value' => Sort::DEFAULT_SORT_VALUE],
            ['status', 'in', 'range' => array_keys(Status::getStatusesArray())],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],
            [['layoutImageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp, svg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Parking Image'),
            'layout_image' => Yii::t('app', 'Parking Layout Image'),
            'imageFile' => Yii::t('app', 'Parking Image'),
            'layoutImageFile' => Yii::t('app', 'Layout Image'),
            'description' => Yii::t('app', 'Parking Description'),
            'callback_button_name' => Yii::t('app', 'Callback Button Name'),
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
            
            'name' => Yii::t('app', 'Parking Name Hint'),
            'imageFile' => Yii::t('app', 'Parking imageFile Hint {extensions}', ['extensions' => 'png, jpg, jpeg, webp']),
            'layoutImageFile' => Yii::t('app', 'Parking layoutImageFile Hint {extensions}', ['extensions' => 'png, jpg, jpeg, webp']),
            'description' => Yii::t('app', 'Parking Description Hint'),
            'callback_button_name' => Yii::t('app', 'Parking Callback Button Name Hint'),
            'comment' => Yii::t('app', 'Parking Comment Hint'),
            'sort' => Yii::t('app', 'Sort Hint. Default value is {sortDefault}', ['sortDefault' => Sort::DEFAULT_SORT_VALUE]),
            'status' => Yii::t('app', 'Status Hint'),
        ];
    }

    public static function find()
    {
        return new ParkingQuery(get_called_class());
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->uploadFile('imageFile', 'image', self::UPLOAD_PATH);
            $this->uploadFile('layoutImageFile', 'layout_image', self::UPLOAD_PATH);
            return true;
        }
        return false;
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $this->deleteSingleFile('image', self::UPLOAD_PATH);
            $this->deleteSingleFile('layout_image', self::UPLOAD_PATH);
            return true;
        } else {
            return false;
        }
    }
}
