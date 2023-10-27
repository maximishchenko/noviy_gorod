<?php

namespace frontend\modules\content\models;

use backend\modules\content\models\Lead as backendLead;
use common\jobs\SendToEmailJob;
use common\jobs\SendToTelegramJob;
use frontend\modules\content\models\query\LeadQuery;
use Yii;
use yii\behaviors\TimestampBehavior;

class Lead extends backendLead
{
    
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

    public static function find()
    {
        return new LeadQuery(get_called_class());
    } 


    public function afterSave($insert, $changedAttributes)
    {
        $this->callbackToEmail();
        $this->callbackToTelegram();
        parent::afterSave($insert, $changedAttributes);
    }

    protected function callbackToTelegram()
    {
        try {
            $chat_ids = explode(',', Yii::$app->configManager->getItemValue('reportTelegramChatID'));
            if (isset($chat_ids) && !empty($chat_ids) && is_array($chat_ids)) {
                $message = $this->generateMessageText();
                
                Yii::$app->queue->push(new SendToTelegramJob([
                    'chat_ids' => $chat_ids,
                    'message' => $message
                ]));
            } else {
                return Yii::error(Yii::t('app', "Telegram Chat ID is not set"));
            }
            return true;
        } catch (\Exception $e) {
            Yii::debug($e->getMessage());
        }
    }

    protected function callbackToEmail()
    {
        try {
            $emails = explode(',', Yii::$app->configManager->getItemValue('reportEmail'));

            if (isset($emails) && !empty($emails) && is_array($emails)) {
                $message = $this->generateMessageText();
                
                Yii::$app->queue->push(new SendToEmailJob([
                    'emails' => $emails,
                    'body' => $message,
                    'subject' => $this->subject,
                ]));
            } else {
                return Yii::error(Yii::t('app', "Incorrect report Emails"));
            }
            return true;
        } catch (\Exception $e) {
            Yii::debug($e->getMessage());
        }
    }

    protected function generateMessageText()
    {        
        $message = Yii::t('app', 'ContactName {name}', ['name' => $this->name]) . PHP_EOL;
        $message .= Yii::t('app', 'ContactPhone {phone}', ['phone' => $this->phone]) . PHP_EOL;
        $message .= Yii::t('app', 'ContactBody {body}', ['body' => $this->body]) . PHP_EOL;
        return $message;
    }
}