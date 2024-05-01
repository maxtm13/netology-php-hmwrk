<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        include_once 'style.php';
    ?>
</head>
<body>
<div class="form">
    <?php setcookie('error', null);
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label> C каким именем сохранить файл на сервере
            <input type="text" name="file_name">
        </label>
        <br>
        <label for="content"> выберите файл </label>
        <input type="file" name="content">
        <input type="submit" value="Отправить">

    </form>
    <div class="error">
        <?php
            echo $_COOKIE['errorName'] . "<br>";
            echo $_COOKIE['error'] . "<br>";
        ?>
    </div>

</div>
</body>
</html>
