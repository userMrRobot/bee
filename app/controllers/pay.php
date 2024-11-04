<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Страница пополнения';
addMess('payEror', 'Платежка пока не работает');
dump($_SESSION);
require ALL . '/paymoney.view.php';
?>