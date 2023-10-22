<?php

namespace backend\modules\catalog\models;

use backend\modules\catalog\models\query\ApartmentQuery;
use backend\traits\fileTrait;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%apartment}}".
 *
 * @property int $id
 * @property int|null $layout_id
 * @property string|null $name
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
class Apartment extends \yii\db\ActiveRecord
{
    use fileTrait;

    const UPLOAD_PATH = 'upload/apartment/';

    public $imageFile;
    
    public static function tableName()
    {
        return '{{%apartment}}';
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
            [['layout_id', 'sort', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['comment'], 'string'],
            [['name', 'image', 'status'], 'string', 'max' => 255],
            [['layout_id'], 'exist', 'skipOnError' => true, 'targetClass' => Layout::class, 'targetAttribute' => ['layout_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'layout_id' => Yii::t('app', 'Layout ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
            'comment' => Yii::t('app', 'Comment'),
            'sort' => Yii::t('app', 'Sort'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    public function getLayout()
    {
        return $this->hasOne(Layout::class, ['id' => 'layout_id']);
    }

    public static function find()
    {
        return new ApartmentQuery(get_called_class());
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
