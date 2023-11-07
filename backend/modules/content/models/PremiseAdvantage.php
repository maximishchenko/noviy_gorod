<?php

declare(strict_types=1);

namespace backend\modules\content\models;

use backend\modules\content\models\query\PremiseAdvantageQuery;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "{{%premise_advantage}}".
 *
 * @property int $id
 * @property int $premise_id
 * @property string $name
 * @property string|null $text
 * @property string|null $comment
 * @property int|null $sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Premise $premise
 */
class PremiseAdvantage extends \yii\db\ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%premise_advantage}}';
    }

    public function rules(): array
    {
        return [
            [['premise_id', 'name'], 'required'],
            [['premise_id', 'sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['text', 'comment'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['premise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Premise::class, 'targetAttribute' => ['premise_id' => 'id']],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'premise_id' => Yii::t('app', 'Premise ID'),
            'name' => Yii::t('app', 'Name'),
            'text' => Yii::t('app', 'Text'),
            'comment' => Yii::t('app', 'Comment'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    public function getPremise(): ActiveQuery
    {
        return $this->hasOne(Premise::class, ['id' => 'premise_id']);
    }

    public static function find(): PremiseAdvantageQuery
    {
        return new PremiseAdvantageQuery(get_called_class());
    }
}
