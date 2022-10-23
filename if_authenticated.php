<?php
$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
if(isset($_COOKIE['my_login']) && isset($_COOKIE['my_pass'])){
    $sqlLogin = mysqli_query($connectBD,"SELECT login FROM confirmed_users_adminca ");
    $resLogin = mysqli_fetch_array($sqlLogin);
    $sqlPass = mysqli_query($connectBD,"SELECT pass FROM confirmed_users_adminca ");
    $resPass = mysqli_fetch_array($sqlPass);
    $lg = $_COOKIE['my_login'];
    if($resLogin['login']==$_COOKIE['my_login'] && $resPass['pass']==$_COOKIE['my_pass']){
        echo "<h2 style='color: gray; text-align: center;'> Доброго времени суток $lg </h2>"."<br>";
    }
}else header("Location: ../Authentication/authentication_form.php");