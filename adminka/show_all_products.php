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
    <style> .inp{margin: 15px;}</style>
</head>
<body>

    <?php

if($result = $connectBD->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Товаров: $rowsCount</p>";
    foreach ($result as $row) {
        echo '<form action="execute_show_all_products.php" method="post">';
        echo 'id:';
        echo '<input type="text" name="id" class="inp" style="width: 25px;" value="'.$row["id"].'">';
        echo 'Название:';
        echo '<input type="text" name="name" class="inp"  value="'.$row["name"].'">';
        echo 'Цена:';
        echo '<input type="text" name="price" class="inp"  value="'.$row["price"].'">';
        echo 'Описание:';
        echo '<input type="text" name="descr" class="inp"  value="'.$row["descr"].'">';
        echo '<button type="submit" class="inp" name="update" value="update">Изменить</button>';
        echo '<button type="submit" class="inp" name="delete" value="delete">Удалить</button>';
        echo "<hr>";
        echo '</form>';
    }
    $result->free();
}else {echo "Ошибка: " . $connectBD->error;}
    ?>

</body>
</html>