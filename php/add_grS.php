<?php
/** @var string $error_message - Текст ошибки */
session_start();
require '../config/db.php';
var_dump($_POST);
//преобразование дней недели в цифры
//получить id группы по имени
//обновление данных в базе данных (UPDATE)

$transDay = [
    'Понедельник' => 0,
    'Вторник' => 1,
    'Среда' => 2,
    'Четверг' => 3,
    'Пятница' => 4,
    'Суббота' => 5,
    'Воскресенье' => 6,
];

$userDay = explode(", ", $_POST["day_of_w"]);
$finalyDay = [];

foreach ($userDay as $day){
    var_dump($day);
    if (isset($transDay[$day])) {
        $finalyDay[] = $transDay[$day];
    }
}
var_dump($finalyDay);

