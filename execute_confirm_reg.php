<?php
//////////////////////////////////////////////////////////////////////////////
//  Имя БД: admin_template_php
//  Имя таблицы: users_adminca
//  3 столбца: id(primary key and autoIncrement), name, pass
// предназначенна для дальнейшей верефикации пользователей
//////////////////////////////////////////////////////////////////////////////

if (isset($_POST["login"]) && isset($_POST["pass"])&& isset($_POST["id"])) {
    $connectBD = new mysqli("localhost", "root", "", "admin_template_php");
    if ($connectBD->connect_error) {
        die("Ошибка: " . $connectBD->connect_error);
    }
    $login = $connectBD->real_escape_string($_POST["login"]);
    $pass = $connectBD->real_escape_string($_POST["pass"]);
    $id = $connectBD->real_escape_string($_POST["id"]);

    $sqlIns = "INSERT INTO confirmed_users_adminca ( login	, pass ) VALUES ( '$login', '$pass')";
    $sqlDel = "DELETE FROM users_adminca WHERE login = '$id'";
    if ($connectBD->query($sqlIns)) {
        echo "<h1 id='message_about_reg' style='color: red; text-align: center; margin: 20% 0;'>
                    Вы решили что пользователь достоин!
              </h1>";

            //header("refresh:2;url=/");  // Перенаправляет через 3 секунды на главную страницу

        die();


    } else {
        echo "Ошибка: " . $connectBD->error;
    }
    $connectBD->close();
    var_dump($_POST['login']);
}