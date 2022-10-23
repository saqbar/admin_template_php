<?php
$connectBD = new mysqli("localhost", "root", "", "admin_template_php");
if(isset($_COOKIE['my_login']) && isset($_COOKIE['my_pass'])){                                 //если строка из куки =строке
    $sqlLogin = mysqli_query($connectBD,"SELECT login FROM confirmed_users_adminca ");  //запрашиваем из БД в таблице confirmed_users_adminca логины
    $resLogin = mysqli_fetch_array($sqlLogin);                                                // переводим их в массив
    $sqlPass = mysqli_query($connectBD,"SELECT pass FROM confirmed_users_adminca ");
    $resPass = mysqli_fetch_array($sqlPass);

    if($resLogin['login']==$_COOKIE['my_login'] && $resPass['pass']==$_COOKIE['my_pass']){  // если данные из куки = тем что в БД
        header("Location: adminka/main.php");                                       // редиректим в админку
    }
}else {
    header("Location: ../admin_template_php/Authentication/authentication_form.php");   //если нет, редирект на авторизацию
}