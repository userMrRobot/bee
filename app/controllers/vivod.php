<?php

if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Страница вывода ДС';

dump($_SESSION);

require ALL . '/vivod.view.php';
?>