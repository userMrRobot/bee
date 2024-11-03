<?php
use classes\Game;
global $db;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: /credit");
    die;
}
if($_SESSION['userInfo']['credit_silver'] != 0){
    newRecordInSession('kredit-eror','У вас уже есть активный кредит');
    header("location: /credit");
    die;
}
if ($_POST['moneyObmen'] < 0 or $_POST['moneyObmen'] > 10000){
    header("location: /credit");
    die;

}

$credit = new \classes\Credit();
try {
    $credit->getCredit($db);
    newRecordInSession('kredit-success', 'Кредит успешно получен');
    header("location: /lk");
    die;
}
catch(PDOException $e){
    newRecordInSession('kredit-eror', 'Не удалось получить кредит.Повторите опперацию');
    header("location: /credit");
}

