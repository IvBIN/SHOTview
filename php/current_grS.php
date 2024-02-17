<?php
/** @var string $itemGroup - all group */
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
$finalyDaysGroup = [];
foreach ($itemGroup as $item) {
    $dayGroupCurr = [];

    if (empty($item['days_of_week'])) {
        $finalyDaysGroup[] = null;
        continue;
    }

    $dayCurr = explode(", ", $item['days_of_week']);
    foreach ($dayCurr as $day) {
        if (isset($transDayCur[$day])) {
            $dayGroupCurr[] = $transDayCur[$day];
        }
    }

    $finalyDaysGroup[] = $dayGroupCurr;
}
