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

foreach ($userDay as $day) {
//    var_dump($day);
    if (isset($transDay[$day])) {
        $finalyDay[] = $transDay[$day];
    }
}
//var_dump($finalyDay);

$finalyDayStr = implode(", ", $finalyDay);
//var_dump($finalyDayStr);

$nameG = $_POST["group"];
//var_dump($nameG);

$id_group = select("SELECT id FROM groups WHERE name = :nameG", ['nameG' => $nameG]);
$idG = $id_group[0]['id'];

//var_dump($idG);

$messageG = $_POST["message"];
//var_dump($messageG);


$updateDB = update("UPDATE groups SET days_of_week = :days_of_week, 
                      message = :message WHERE id = :id",
    [
        'days_of_week' => $finalyDayStr,
        'message' => $messageG,
        'id' => $idG,
    ]
);

var_dump($updateDB);
?>


<!--***** Для iframe ****-->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <meta charset="UTF-8">-->
<!--        <meta name="viewport"-->
<!--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--        <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--        <link rel="stylesheet" href="../style.css">-->
<!--        <script src="../script.js" defer></script>-->
<!--        <title>Document</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <div class="edit_window">-->
<!--            --><?//var_dump($updateDB);?>
<!--        </div>-->
<!---->
<!--    </body>-->
<!--</html>-->

