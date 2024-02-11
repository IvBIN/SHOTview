<?php
/** @var string $error_message - Текст ошибки */
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Menu</title>
    </head>
    <body>
        <div class="container">
            <div class="menu_field">
                <div class="keyboard_up">
                    <a href="./views/add_groupeS.php" class="btn btn_create">Создать группу</a>
                    <a href="./views/edit_schedule" class="btn btn_edit">Редактировать группу</a>
                </div>
                <div class="keyboard_down">
                    <a href="./views/delete_schedule" class="btn btn_delete">Удалить группу</a>
                </div>
            </div>
        </div>

    </body>
</html>

