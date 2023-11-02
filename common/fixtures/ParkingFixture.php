<?php
namespace common\fixtures;

use yii\test\ActiveFixture;

class ParkingFixture extends ActiveFixture
{
    public $modelClass = 'backend\modules\content\models\Parking';
    public $dataFile = __DIR__ . '/data/content/parking.php';
}