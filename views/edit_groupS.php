<?php
/** @var string $error_message - Текст ошибки */
session_start();
require '../config/db.php';
$itemGroup = select('SELECT * FROM groups');
require '../php/current_grS.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit schedule</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js" defer></script>
</head>
<body>
<div class="container">
    <div class="menu_field">
        <h2 class="menu_edit">Редактирование расписания</h2>
        <form method="post" name="group_add_form" enctype="multipart/form-data" action="../php/edit_grS.php">
            <div class="groups_add_form">

                <div class="form_item">
                    <label for="field_title" class="title_label">Выбор группы:</label>

                    <div class="selectHeadGroup">Выберите группу</div>
                    <input type="text" name="group" class="input_group" value="">
                    <div class="selectBodyGroup">
                        <ul>
                            <?php foreach ($itemGroup as $item): ?>
                                <li class="groupN"><?php echo $item['name']?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

                <div class="form_item">
                    <label for="field_title" class="title_label">Расписание:</label>

                    <div class="selectHead">Выберите дни</div>
                    <input type="text" name="day_of_w" class="input_day" value="">
                    <div class="selectBody">
                        <ul>
                            <!--                                    <li class="dayW">--><?php //= insert('INSERT INTO groups (days_of_week) VALUES (0)')?><!--Понедельник</li>-->

                            <li class="dayW">Понедельник</li>
                            <li class="dayW">Вторник</li>
                            <li class="dayW">Среда</li>
                            <li class="dayW">Четверг</li>
                            <li class="dayW">Пятница</li>
                            <li class="dayW">Суббота</li>
                            <li class="dayW">Воскресенье</li>
                        </ul>

                    </div>

                </div>

                <div class="form_item">
                    <label for="field_title" class="title_label">Сообщение:</label>
                    <input type="text"
                           name="message"
                           id="field_message"
                           class="form-control"
                           maxlength="120"
                           value=""
                           placeholder="Введите сообщение"
                    >
                </div>

                <div class="button_box">
                    <button type="submit"
                            id="btnGroupAddForm"
                            class="btn btn-primary btn_edit_S"
                    >Редактировать
                    </button>
                </div>
            </div>

        </form>

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
</div>

</body>
</html>

