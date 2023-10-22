<?php

namespace backend\modules\content\models;

use backend\modules\content\models\query\StageItemQuery;
use common\models\Sort;
use Yii;

/**
 * This is the model class for table "{{%stage_item}}".
 *
 * @property int $id
 * @property int|null $stage_id
 * @property string|null $name
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Stage $stage
 */
class StageItem extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%stage_item}}';
    }

    public function rules()
    {
        return [
            [['stage_id', 'sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['stage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stage::class, 'targetAttribute' => ['stage_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stage_id' => Yii::t('app', 'Stage ID'),
            'name' => Yii::t('app', 'Stage Item Name'),
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
            'name' => Yii::t('app', 'Stage Name Hint'),
            'comment' => Yii::t('app', 'Comment Hint'),
            'sort' => Yii::t('app', 'Sort Hint. Default value is {sortDefault}', ['sortDefault' => Sort::DEFAULT_SORT_VALUE]),
            'status' => Yii::t('app', 'Status Hint'),
        ];
    }

    public function getStage()
    {
        return $this->hasOne(Stage::class, ['id' => 'stage_id']);
    }

    public static function find()
    {
        return new StageItemQuery(get_called_class());
    }
}
