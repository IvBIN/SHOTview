<?php
/** @var string $error_message - Текст ошибки */
session_start();
require '../config/db.php';
$itemGroup = select('SELECT * FROM groups');

//var_dump($_POST);

//преобразование цифр в дни недели (from database)
//передача обработанных данных на главную страницу (index.php)


$transDayCur = [
    '0' => "Понедельник",
    '1' => "Вторник",
    '2' => "Среда",
    '3' => "Четверг",
    '4' => "Пятница",
    '5' => "Суббота",
    '6' => "Воскресенье",
];
//var_dump($transDayCur);

$dayGroupCurr = [];

foreach ($itemGroup as $item) {
//    $dayCurr = exlode(", ", $item['days_of_week']);
//    var_dump($dayCurr);

  if (isset($transDayCur[$item['days_of_week']])){
      $dayGroupCurr[]= $item['days_of_week'];
  }
    var_dump($item['days_of_week']);
}


var_dump($dayGroupCurr);

//$userDay = explode(", ", $_POST["day_of_w"]);
//$finalyDayCur = [];
//
//foreach ($userDay as $day) {
////    var_dump($day);
//    if (isset($transDay[$day])) {
//        $finalyDay[] = $transDay[$day];
//    }
//}
//var_dump($finalyDay);

//$finalyDayStr = implode(", ", $finalyDay);
//var_dump($finalyDayStr);

//$nameG = $_POST["group"];
//var_dump($nameG);

//$id_group = select("SELECT id FROM groups WHERE name = :nameG", ['nameG' => $nameG]);
//$idG = $id_group[0]['id'];

//var_dump($idG);

//$messageG = $_POST["message"];
//var_dump($messageG);


//$updateDB = update("UPDATE groups SET days_of_week = :days_of_week,
//                      message = :message WHERE id = :id",
//    [
//        'days_of_week' => $finalyDayStr,
//        'message' => $messageG,
//        'id' => $idG,
//    ]
//);

//var_dump($updateDB);

