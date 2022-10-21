<?php
define('br',"<br>");        // Обьявляем константу
define('hr',"<hr>");        // Обьявляем константу
//_____________________________________________________________________________________________________________
include('BD/bd_conect.php');
//_____________________________________________________________________________________________________________
echo 'Вывод переменной $_POST:'.br;
var_dump($_POST);

echo "<hr>";

if($_POST){
     $nameAdminca= $_POST['name'];
     $passAdminca= $_POST['pass'];
}
else echo 'нет элементов в _POST'.br;

if($_POST) {
    setcookie("name", $nameAdminca, 0);
    setcookie("pass", $passAdminca, 0);
}
var_dump($_COOKIE);
