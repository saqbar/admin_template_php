<?php
$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
var_dump($_COOKIE);
if($_COOKIE['my_login'] != null && $_COOKIE['my_pass'] != null){
    $sqlLogin = mysqli_query($connectBD,"SELECT login FROM confirmed_users_adminca ");
    $resLogin = mysqli_fetch_array($sqlLogin);
    $sqlPass = mysqli_query($connectBD,"SELECT pass FROM confirmed_users_adminca ");
    $resPass = mysqli_fetch_array($sqlPass);

    if($resLogin['login']==$_COOKIE['my_login'] && $resPass['pass']==$_COOKIE['my_pass']){
        header("Location: adminka/index.php");
    }
}