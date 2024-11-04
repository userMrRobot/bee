<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Страница магазина';


$max_bee_1 = floor($_SESSION['userInfo']['silver'] / 500);
addMessGlobal('max_bee_1', $max_bee_1);
$max_bee_2 = floor($_SESSION['userInfo']['silver'] / 5000) ;
addMessGlobal('max_bee_2', $max_bee_2);
$max_bee_3 = floor($_SESSION['userInfo']['gold'] / 500) ;
addMessGlobal('max_bee_3', $max_bee_3);
dump($_SESSION);

require ALL . '/shop.view.php';

?>
