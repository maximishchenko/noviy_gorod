<?php

use common\models\Status;

$time = time();
$apartment = [];
// 1й подъезд
// 1й этаж
$apartment[1] = [
    'id' => 1,
    'layout_id' => 1,
    'apartment_floor' => 1,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[2] = [
    'id' => 2,
    'layout_id' => 2,
    'apartment_floor' => 1,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[3] = [
    'id' => 3,
    'layout_id' => 3,
    'apartment_floor' => 1,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
// 2й этаж
$apartment[4] = [
    'id' => 4,
    'layout_id' => 1,
    'apartment_floor' => 2,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[5] = [
    'id' => 5,
    'layout_id' => 2,
    'apartment_floor' => 2,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[6] = [
    'id' => 6,
    'layout_id' => 3,
    'apartment_floor' => 2,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
// 3й этаж
$apartment[7] = [
    'id' => 7,
    'layout_id' => 1,
    'apartment_floor' => 3,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[8] = [
    'id' => 8,
    'layout_id' => 2,
    'apartment_floor' => 3,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[9] = [
    'id' => 9,
    'layout_id' => 3,
    'apartment_floor' => 3,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];

// 2й подъезд
// 1й этаж
$apartment[10] = [
    'id' => 10,
    'layout_id' => 4,
    'apartment_floor' => 1,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[11] = [
    'id' => 11,
    'layout_id' => 4,
    'apartment_floor' => 2,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[12] = [
    'id' => 12,
    'layout_id' => 4,
    'apartment_floor' => 3,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
// 2й этаж
$apartment[13] = [
    'id' => 13,
    'layout_id' => 5,
    'apartment_floor' => 1,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[14] = [
    'id' => 14,
    'layout_id' => 5,
    'apartment_floor' => 2,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$apartment[15] = [
    'id' => 15,
    'layout_id' => 5,
    'apartment_floor' => 3,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];

return $apartment;