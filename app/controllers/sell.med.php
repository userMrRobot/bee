<?php


if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location:/sell");
}


if ($_POST['medObmen'] < 1 or $_POST['medObmen'] > $_SESSION["userInfo"]['medAll']){
    newRecordInSession('eror_med', 'Введите правильное кол-во меда');
    header("location: /sell");
    die;

//создай уведомление и выведи на вьюшке
}

global $db;

$medObmen = new \classes\ObmenMed();
$medObmen->db($db);


