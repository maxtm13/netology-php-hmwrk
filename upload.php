<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $file_name = $_POST['file_name'];
    $dirname = "uploads";
    $pathFile = "./$dirname/" . basename($file_name);

    //    echo 'post_max_size: ' . ini_set('post_max_size', '20M') . '<br>';
    //    echo 'upload_max_filesize: '.ini_set('upload_max_filesize', '7M') . '<br>';

    if (!$file_name) {
        $errorFileName = 'Введите имя файла';
        setcookie('errorName', $errorFileName, time() + 3600);
        header('Location: /');
    } else {
        setcookie('errorName', '', time() - 3600);
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        include_once 'style.php'
    ?>
    <title>upload file</title>
</head>
<body>
<?php
    if ($_FILES && $_FILES['content']["error"] == UPLOAD_ERR_OK) {
        setcookie('error', UPLOAD_ERR_OK, time() + 3600);
        if (!file_exists($dirname)) {
            if (!mkdir($dirname)) {
                echo 'Не удалось создать папку' . $dirname . ' ' . E_WARNING . '<br>';
            };
        }
        if (move_uploaded_file($_FILES['content']['tmp_name'], $pathFile)) {
            echo 'Файл сохранен: ' . realpath($pathFile) . '<br>';
            echo 'Размер файла: ' . stat($pathFile)['size'] . ' bytes';
        } else {
            $errorName = 'Файл не сохранен на сервер';
            setcookie('error', $errorName, time() + 3600);
            header('Location: /');
        }
    } else {
        $errorName = 'Ошибка передачи файла';
        setcookie('error', $errorName, time() + 3600);
        header('Location: /');
    }
?>
</body>
</html>




