<?php
include('if_authenticated.php');
include('adminka/menu_panel.php');

$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
$sql = "SELECT * FROM users_adminca";

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
    menu_panel();
if($result = $connectBD->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Запросов на регистрацию: $rowsCount</p>";
    foreach ($result as $row) {
        echo '<form action="execute_confirm_reg.php" method="post">';
        echo 'id:';
        echo '<input type="text" name="id" class="inp" style="width: 25px;" value="'.$row["id"].'">';
        echo 'Name:';
        echo '<input type="text" name="name" class="inp"  value="'.$row["name"].'">';
        echo 'Surname:';
        echo '<input type="text" name="surname" class="inp"  value="'.$row["surname"].'">';
        echo 'login:';
        echo '<input type="text" name="login" class="inp"  value="'.$row["login"].'">';
        echo 'Password:';
        echo '<input type="text" name="pass" class="inp"  value="'.$row["pass"].'">';
        echo '<button type="submit" class="inp">Подтвердить</button>';
        echo "<hr>";
        echo '</form>';
    }
    $result->free();
}else {echo "Ошибка: " . $connectBD->error;}
    ?>

</body>
</html>


