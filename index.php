<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form">
    <?php setcookie('error', null);
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label> C каким именем сохранить файл на сервере
            <input type="text" name="file_name">
        </label>
        <div class="error">
            <?php
                echo $_COOKIE['error'];
            ?>
        </div>
        <br>
        <label for="content"> выберите файл </label>
        <input type="file" name="content">
        <input type="submit" value="Отправить">

    </form>
</div>

<?php
    /*

Создайте HTML-файл с формой, содержащей следующие поля:
file_name с подписью «с каким именем сохранить файл на сервере» (текстовое поле);
content с подписью «выберите файл» (поле для загрузки файла);
Обратите внимание на атрибуты enctype и method у формы.
Создайте PHP-файл upload.php, имя которого должно быть указано в атрибуте формы action.
Внутри файла upload.php необходимо проверить:
если поле file_name пустое, то выполнить редирект обратно на форму, для этого используйте функцию header из предыдущего занятия;
если файл не был передан на сервер, то тоже редиректнуть обратно на форму;
иначе сохранить файл на сервер в каталог upload, используя имя из поля file_name и отобразить полный путь к сохранённому файлу и размер файла.
    */
    //echo "Привет from small server!";

    //phpinfo();

?>
</body>
</html>
