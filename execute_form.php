<?php
define('br',"<br>");        // Обьявляем константу
define('hr',"<hr>");        // Обьявляем константу
//_____________________________________________________________________________________________________________
//_____________________________________________________________________________________________________________
$mylogin =$_POST['login'];
$mypass =$_POST['pass'];

if (isset($_POST["login"]) && isset($_POST["pass"])) {
    $connectBD = new mysqli("localhost", "root", "", "admin_template_php");
    if ($connectBD->connect_error) {
        die("Ошибка: " . $connectBD->connect_error);
    }
    $sql = mysqli_query($connectBD,"SELECT login FROM confirmed_users_adminca ");
    $res = mysqli_fetch_array($sql);

    if($res['login']==$mylogin){
        setcookie("my_login", $mylogin, 0);
        setcookie("my_pass", $mypass, 0);
        } else{
        echo "<h1 style='color: red; text-align: center; margin: 20% 0;'>Вы не зарегистрированны, либо не прошли верификацию</h1>";
    }

}
