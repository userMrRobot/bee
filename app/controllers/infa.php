<?php
$title = 'Главная страница';

//main
if(!isset($_SESSION['user'])){
    require ALL . '/infa.view.php';
    die;
}

if(isset($_SESSION['user'])){
    require ALL . '/infa_lk.view.php';
    die;
}