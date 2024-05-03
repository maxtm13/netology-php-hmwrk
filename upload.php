<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $file_name = $_POST['file_name'];
    $dirname = "uploads";
    $pathFile = "./$dirname/" . basename($file_name);
    $errorName = '';

    if ($file_name==='') {
        $errorName .= 'Введите имя файла' . '<br>';
    }

    if ($_FILES && $_FILES['content']["error"] == UPLOAD_ERR_OK) {
        if (!file_exists($dirname)) {
            if (!mkdir($dirname)) {
                header('Location: /?error=' . 'Не удалось создать папку' . $dirname . ' ' . E_WARNING . '<br>');
            }
        }
        if (move_uploaded_file($_FILES['content']['tmp_name'], $pathFile)) {
            header('Location: /?path='. realpath($pathFile) . '&size=' . stat($pathFile)['size'] );

        } else {
            $errorName .= 'Файл не сохранен на сервер' . '<br>';
            header('Location: /?error=' . $errorName);
        }
    } else {
        $errorName .= 'Ошибка передачи файла' . '<br>';
        header('Location: /?error=' . $errorName);
    }

