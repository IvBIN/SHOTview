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
        <title>Menu</title>
        <link rel="stylesheet" href="../style.css">
        <script src="../script.js" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="menu_field">
                <h2>Создание расписания</h2>
                <form method="post" name="group_add_form" enctype="multipart/form-data">
                    <div class="groups_add_form">

                        <div class="form_item">
                            <label for="field_title" class="title_label">Выбор группы:</label>

                            <div class="selectHeadGroup">Выберите группу</div>
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
                            <div class="selectBody">
                                <ul>
                                    <li><?= insert('INSERT INTO groups (days_of_week) VALUES (0)')?>Понедельник</li>

                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 0 ?>Понедельник</li>                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 0 ?>Понедельник</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 1 ?>Вторник</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 2 ?>Среда</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 3 ?>Четверг</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 4 ?>Пятница</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 5 ?>Суббота</li>
                                    <li><?= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : 6 ?>Воскресенье</li>
                                </ul>
                            </div>

<!--                            <select name="select[]" size="3" multiple>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '0' ?><!--">Понедельник</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '1' ?><!--">Вторник</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '2' ?><!--">Среда</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '3' ?><!--">Четверг</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '4' ?><!--">Пятница</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '5' ?><!--">Суббота</option>-->
<!--                                <option value="--><?php //= !empty($_POST['groups']['days_of_week']) ? $_POST['groups']['days_of_week'] : '6' ?><!--">Воскресенье</option>-->
<!--                            </select>-->
                        </div>

                        <div class="form_item">
                            <label for="field_title" class="title_label">Сообщение:</label>
                            <input type="text"
                                   name="groups[message]"
                                   id="field_message"
                                   class="form-control"
                                   maxlength="120"
                                   value="<?= !empty($_POST['groups']['message']) ? $_POST['groups']['message'] : '' ?>"
                                   placeholder="Введите сообщение"
                            >
                        </div>

                        <div class="button_box">
                            <button type="submit"
                                    name="btn_group_add_form"
                                    id="btnGroupAddForm"
                                    class="btn btn-primary"
                                    value="1"
                                    disabled
                            >Создать
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </body>
</html>
