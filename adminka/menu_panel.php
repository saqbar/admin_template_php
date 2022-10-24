<?php
function menu_panel(){
    echo '<head><link rel="stylesheet" href="css/style.css">
</head>';
    echo '
<div id="menu_panel" style="margin: 0 20%; display: flex;">
    <a href="/admin_template_php/adminka/main.php" class="link-dark" style="margin: 15px;">Главная</a>
    <a href="/admin_template_php/confirm_reg.php" class="link-dark" style="margin: 15px;">Верифицировать пользователя админкой</a>
    <a href="/admin_template_php/adminka/add_product/add_product.php" class="link-dark" style="margin: 15px;">Добавить товар</a>
    <a href="/admin_template_php/adminka/show_all_products.php" class="link-dark" style="margin: 15px;">Показать все товары</a>
    <a href="/admin_template_php/adminka/exit_of_adminka.php" class="link-dark" style="margin: 15px;" >Выход</a>
</div>
';
}




?>

