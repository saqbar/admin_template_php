<?php
$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
if (!$connectBD) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['id'];
$id_of_prod=$_POST['id_of_prod'];
$name=$_POST['name'];
$price=$_POST['price'];
$descr=$_POST['descr'];


// Перезапись таблицы из БД по id, если нажимаем кнопку Изменить
if(isset($_POST['update'])) {
    $sqlUpd = "UPDATE products SET id_of_prod='$id_of_prod', name='$name', price='$price',descr='$descr' WHERE id='$id'";
    if ($connectBD->query($sqlUpd) === TRUE) {
        echo "<h1 id='message_about_reg' style='color: red; text-align: center; margin: 20% 0;'>
                    Запись успешно обновлена
              </h1>";
        header("refresh:2; show_all_products.php");
    } else {
        echo "Ошибка перезаписи: " . $connectBD->error;
    }

    $connectBD->close();
}

//// Удаление таблицы из БД по id, если нажимаем кнопку Удалить
if(isset($_POST['delete'])) {
    $sqlDel = "DELETE FROM products WHERE id = '$id'";
    if ($connectBD->query($sqlDel) === TRUE) {
        echo "<h1 id='message_about_reg' style='color: red; text-align: center; margin: 20% 0;'>
                    Запись успешно удалена
              </h1>";
        header("refresh:2; show_all_products.php");
    } else {
        echo "Ошибка удаления записи: " . $connectBD->error;
    }

    $connectBD->close();
}
