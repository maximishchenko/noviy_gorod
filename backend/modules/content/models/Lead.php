<?php

namespace backend\modules\content\models;

use backend\modules\content\models\query\LeadQuery;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%lead}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $body
 * @property int|null $created_at
 */
class Lead extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%lead}}';
    }
    
    public function behaviors()
    {
        return[
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => function () {
                    return date('U');
                },
            ],
        ];
    }  

    public function rules()
    {
        return [
            [['body'], 'string'],
            [['created_at'], 'integer'],
            [['name', 'phone', 'email', 'subject'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Lead Name'),
            'phone' => Yii::t('app', 'Lead Phone'),
            'email' => Yii::t('app', 'Lead Email'),
            'subject' => Yii::t('app', 'Lead Subject'),
            'body' => Yii::t('app', 'Lead Body'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public static function find()
    {
        return new LeadQuery(get_called_class());
    }
}
