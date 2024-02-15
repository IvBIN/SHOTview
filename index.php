<?php
/** @var string $error_message - Текст ошибки */

session_start();
require './config/db.php';
$itemGroup = select('SELECT * FROM groups');

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
<!--                    <a href="select.php" class="btn">Список</a>-->
                </div>
            </div>
            <div class="current_schedule">
                <span class="title_c_schedule">Текущее расписание</span>
                <div class="current_data">
                    <div class="name_group_cur">
                        <span class="title_gc">Группа</span>
                        <ul>
                            <?php foreach ($itemGroup as $item): ?>
                                <li class="group_c_schedule gr_name"><?php echo $item['name']?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="days_group_cur">
                        <span class="title_gc">Дни недели</span>
                        <ul>
                            <?php foreach ($itemGroup as $item): ?>
                                <li class="group_c_schedule gr_day"><?php echo $item['days_of_week']?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="message_group_cur">
                        <span class="title_gc">Сообщения</span>
                        <ul>
                            <?php foreach ($itemGroup as $item): ?>
                                <li class="group_c_schedule gr_message"><?php echo $item['message']?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                </div>


            </div>

            <div class="convert_field">
                <a href="./php/current_grS.php" class="converter">Преобразование в дни недели</a>
            </div>
        </div>

    </body>
</html>

