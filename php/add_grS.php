<?php
/** @var string $error_message - Текст ошибки */
session_start();
require '../config/db.php';
//var_dump($_POST);

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
//    var_dump($day);
    if (isset($transDay[$day])) {
        $finalyDay[] = $transDay[$day];
    }
}
//var_dump($finalyDay);

$finalyDayStr = implode(", ", $finalyDay);
var_dump($finalyDayStr);

$nameG = $_POST["group"];
//var_dump($nameG);

$id_group = select("SELECT id FROM groups WHERE name = :nameG",['nameG'=> $nameG]);
$idG = $id_group[0]['id'];

//$idG = intval(implode('', $id_group));
//$idG = intval($id_group[0]);
//$idG = intval($idGitem[0]['id']);

//var_dump($id_group);

//echo count($id_group);
//echo extract($id_group);

var_dump($idG);

$messageG =$_POST["message"];
//var_dump($messageG);

//$add_DB = insert("INSERT INTO groups (days_of_week, message) VALUES (:days_of_week, :message) WHERE id = :id_group",
//    [
//        'days_of_week' => $finalyDay,
//        'message' => $messageG,
//        'id' => $id_group,
//    ]
//);
//var_dump($add_DB);

//foreach ($id_group as $idG){

    $updateDB = update("UPDATE groups SET days_of_week = :days_of_week, 
                      message = :message WHERE id = :id",
        [
            'days_of_week' => $finalyDayStr,
            'message' => $messageG,
            'id' => $idG,
        ]
    );
//}
var_dump($updateDB);
//var_dump($finalyDay);
