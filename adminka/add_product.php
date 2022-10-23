<?php include ('../if_authenticated.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!--    Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--        End bootstrap-->
    <title>Добавление товара</title>
</head>
<body>

<form action="execute_add_product.php" method="post" id="form_add" enctype="multipart/form-data">

    <h4>id товара:</h4>
    <input class="form-control" type="text" placeholder="id товара" required name="id">
    <h4>Название товара:</h4>
    <input class="form-control" type="text" placeholder="Название товара" required name="name">
    <h4>Цена:</h4>
    <input class="form-control" type="number" placeholder="Цена" required name="price">
    <h4>Описание товара:</h4>
    <div class="form-floating" >
        <textarea class="form-control" placeholder="Описание товара" id="floatingTextarea" name="descr"></textarea>
        <label for="floatingTextarea">Описание товара</label>
    </div>
    <h4>Загрузка Фото:</h4>
    <div class="input-group mb-3">

        <input type="file" class="form-control" id="inputGroupFile01" name="file">
    </div>

    <button type="submit" class="btn btn-secondary">Добавить товар</button>


</form>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>