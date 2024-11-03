<?php

$title = 'Страница правил проекта';

//main
if (!isset($_SESSION['user'])) {
    require ALL . '/rules.view.php';
    die;
}

if (isset($_SESSION['user'])) {
    require ALL . '/rules_lk.view.php';
    die;
}