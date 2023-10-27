<?php

use common\models\Status;

$time = time();
$layouts = [];
$layouts[1] = [
    'id' => 1,
    'entrance_id' => 1,
    // 'name' => 'Однокомнатная 40.5 м2',
    'image' => null,
    'count_rooms' => 1,
    'total_area' => 40.5,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$layouts[2] = [
    'id' => 2,
    'entrance_id' => 2,
    // 'name' => 'Двухкомнатная 60.35 м2',
    'image' => null,
    'count_rooms' => 2,
    'total_area' => 60.35,
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];

return $layouts;