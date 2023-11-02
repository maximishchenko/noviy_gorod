<?php

use common\models\Status;

$time = time();
$parkings = [];
$parkings[1] = [
    'id' => 1,
    'name' => 'Успейте забронировать место в подземном паркинге по выгодной цене!',
    'image' => null,
    'layout_image' => null,
    'description' => "Всего от 258 руб. в день",
    'callback_button_name' => 'Купить',
    'comment' => null,
    'sort' => 1,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$parkings[2] = [
    'id' => 2,
    'name' => 'Защита от погодных условий',
    'image' => null,
    'layout_image' => null,
    'description' => "Автомобиль защищен от снега и дождя. Температура воздуха на парковке позволяет не прогревать машину зимой. Кузов автомобиля защищен от коррозии",
    'callback_button_name' => 'Подобрать машиноместо',
    'comment' => null,
    'sort' => 2,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];
$parkings[3] = [
    'id' => 3,
    'name' => 'Получите экономию своего времени',
    'image' => null,
    'layout_image' => null,
    'description' => "Всегда свободное место для автомобиля. Расчистка от снега больше не требуется. Комфорт, безопасность и свобода передвижения",
    'callback_button_name' => 'Подобрать машиноместо',
    'comment' => null,
    'sort' => 3,
    'status' => Status::STATUS_ACTIVE,
    'created_at' => time(),
    'updated_at' => time(),
    'created_by' => null,
    'updated_by' => null,
];

return $parkings;