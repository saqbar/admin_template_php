<?php
if (isset($_POST["id"]) && isset($_POST["name"])) {
    $connectBD = new mysqli("localhost", "root", "", "admin_template_php");
    if ($connectBD->connect_error) {
        die("Ошибка: " . $connectBD->connect_error);
    }
    $id = $connectBD->real_escape_string($_POST["id"]);
    $name = $connectBD->real_escape_string($_POST["name"]);
    $price = $connectBD->real_escape_string($_POST["price"]);
    $descr= $_POST['descr'];

    $sql = "INSERT INTO products ( id,name,price,descr ) VALUES ( '$id','$name','$price', '$descr')";
    if ($connectBD->query($sql)) {
        echo "<h1  style='color: red; text-align: center; margin: 20% 0;'>
        Вы добавили товар</h1>";
        header( "refresh:2; add_product.php" );
        die();
    }else echo "Ошибка: " . $connectBD->error;
    $connectBD->close();

}