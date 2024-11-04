<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: /lk');
}
dump($_SESSION);



$title = 'Главная страница';

//main

require ALL . '/index.view.php';
























?>





