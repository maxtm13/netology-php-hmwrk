<?php
declare(strict_types=1);
?>
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
        echo isset($_GET['errorName']) ? $_GET['errorName'] . "<br>" : '';
        echo isset($_GET['error']) ? $_GET['error'] . "<br>" : '';
        ?>
    </div>
    <div class="result">
        <?php
        echo isset($_GET['path']) ? 'Файл сохранен: ' . $_GET['path'] . '' : '';
        echo isset($_GET['size']) ? ', размер: ' . $_GET['size'] . ' b' : '';
        ?>
    </div>

</div>
</body>
</html>
