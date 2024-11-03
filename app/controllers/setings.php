<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $title = 'Страница Изменения пароля';
    dump($_SESSION);
    require ALL . "/setings.view.php";
    //подключаем таблицу из бд и выводим инфу в ввиде


}



?>