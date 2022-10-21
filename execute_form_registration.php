<?php
//////////////////////////////////////////////////////////////////////////////
//  Имя БД: admin_template_php
//  Имя таблицы: users_adminca
//  3 столбца: id(primary key and autoIncrement), name, pass
//////////////////////////////////////////////////////////////////////////////

if (isset($_POST["name"]) && isset($_POST["pass"])) {

    $connectBD = new mysqli("localhost", "root", "", "admin_template_php");
    if ($connectBD->connect_error) {
        die("Ошибка: " . $connectBD->connect_error);
    }
    $name = $connectBD->real_escape_string($_POST["name"]);
    $pass = $connectBD->real_escape_string($_POST["pass"]);
    $sql = "INSERT INTO users_adminca (name, pass) VALUES ('$name', $pass)";
    if ($connectBD->query($sql)) {
        echo "<h1 id='message_about_reg' style='color: red; text-align: center; margin: 20% 0;'>
                    Вы успешно зарегистрировались!
              </h1>";
        header( "refresh:2;url=/" );  // Перенаправляет через 3 секунды на главную страницу
        die();

    } else {
        echo "Ошибка: " . $connectBD->error;
    }
    $connectBD->close();
}

