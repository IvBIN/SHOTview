<?php
/** @var string $error_message - Текст ошибки */
session_start();
require '../config/db.php';
$itemGroup = select('SELECT * FROM groups');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add scheduler</title>
        <link rel="stylesheet" href="../style.css">
        <script src="../script.js" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="menu_field">
                <h2 class="menu_add">Создание расписания</h2>
                <form method="post" name="group_add_form" enctype="multipart/form-data" action="../php/add_grS.php">
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
                                    class="btn btn-primary"
                            >Создать
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </body>
</html>
