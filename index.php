<?php
/** @var string $error_message - Текст ошибки */
session_start();
require './config/db.php';
$itemGroup = select('SELECT * FROM groups order by id');
require './php/current_grS.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Menu</title>
</head>
<body>
<div class="container">
    <div class="menu_field">
        <div class="keyboard_up">
            <a href="./views/add_groupeS.php" class="btn btn_create">Создать расписание</a>
            <a href="./views/edit_groupS.php" class="btn btn_edit">Редактировать расписание</a>
        </div>
        <div class="keyboard_down">
            <a href="./views/delete_groupS.php" class="btn btn_delete">Удалить расписание</a>
        </div>
    </div>
    <div class="current_schedule">
        <span class="title_c_schedule">Текущее расписание</span>
        <div class="current_data">
            <table class="table_data">
                <tr class="table_title">
                    <th>Группа</th>
                    <th>Дни недели</th>
                    <th>Сообщения</th>
                </tr>
                <?php foreach ($itemGroup as $key=>$item) : ?>
                    <tr class="table_cell">
                        <td><?= $item['name'] ?></td>
                        <td><?=!empty($finalyDaysGroup[$key]) ? implode(", ", $finalyDaysGroup[$key]) : "" ?></td>
                        <td><?= $item['message'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div>

</body>
</html>

