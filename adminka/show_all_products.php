<?php
include('../if_authenticated.php');
include ('menu_panel.php');
menu_panel();

$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
$sql = "SELECT * FROM products";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> .inp{margin: 15px;} .btn{width: 67px;}</style>
</head>
<body>

    <?php

if($result = $connectBD->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Товаров: $rowsCount</p>";
    foreach ($result as $row) {
        echo '<form action="/admin_template_php/adminka/execute_show_all_products.php" method="post">';
        echo 'id:';
        echo '<input type="text" name="id" class="inp" style="width: 67px;" value="'.$row["id"].'">';
        echo 'id product:';
        echo '<input type="text" name="id_of_prod" class="inp" style="width: 67px;" value="'.$row["id_of_prod"].'">';
        echo 'Название:';
        echo '<input type="text" name="name" class="inp"  value="'.$row["name"].'">';
        echo 'Цена:';
        echo '<input type="text" name="price" class="inp" style="width: 75px;" value="'.$row["price"].'">';
        echo 'Описание:';
        echo '<input type="text" name="descr" class="inp"  value="'.$row["descr"].'">';
        echo '<button type="submit" class="btn" name="update" value="update">Изменить</button>';
        echo '<button type="submit" class="btn" name="delete" value="delete">Удалить</button>';
        echo "<hr>";
        echo '</form>';
    }
    $result->free();
}else {echo "Ошибка: " . $connectBD->error;}
    ?>

</body>
</html>