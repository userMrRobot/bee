<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Дневной бонус';
addMess('dayBonusEror', 'Дневной бонус пока не работает');
dump($_SESSION);

require ALL . '/bonusday.view.php';

?>