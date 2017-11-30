<?php
$title=$news->clearStr($_POST["title"]);
$description=$news->clearStr($_POST["description"]);
$source=$news->clearStr($_POST["source"]);
$category=$news->clearInt($_POST["category"]);
if(empty($t) or empty($d)){
    $errMsg="Заполните все поля формы";
    } else{
    if (!$news->saveNews($t,$c,$d,$s)){
        $errMsg="Произошла ошибка при добавлении новостей";
    }
    //else{header("Location:news.php");
    exit;
   // }
}
