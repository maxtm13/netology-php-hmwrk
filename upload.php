<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $file_name = $_POST['file_name'];
    $dirname = "uploads";
if (!$file_name) {
    $errorName = 'Введите имя файла';
    setcookie('error',$errorName, time() + 10);
    header('Location: /');

}
//
//if ($_FILES['file_name']['error'] !== '0') {
//    header('Location: /');
//}
    if ($_FILES && $_FILES['content']["error"]== UPLOAD_ERR_OK){
        setcookie('error',UPLOAD_ERR_OK, time() + 10);
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
//        echo "file_name: $file_name ";
        if (!file_exists($dirname)) {
           if  (!mkdir($dirname)) {
               echo 'Не удалось создать папку' . $dirname .' '.	E_WARNING . '<br>';
           };
        }


        if (move_uploaded_file($_FILES['content']['tmp_name'], "/$dirname")) {
            echo 'Файл сохранен';

        }
    }
echo get_include_path();
//
//echo "<pre>";
//var_dump($_FILES['file_name']['error']);
//echo "</pre>";


//echo "Супер!!!";



