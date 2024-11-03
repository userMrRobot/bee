<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}

global $db;
$title = 'Страница обмена';


$gold_max = floor($_SESSION['userInfo']['silver'] / 1000);
addMessGlobal('gold_max', $gold_max);
//$_SESSION['userInfo']['gold_max'] = $gold_max;

$user_id = $_SESSION['user']['user_id'];
$sql = $db->query("SELECT *  FROM gameMoney WHERE user_id = :user_id ",[':user_id' => $user_id]);

addMessGlobal('silver', $sql[0]['silver']);
//$_SESSION['userInfo']['silver'] = $sql[0]['silver'];
addMessGlobal('gold', $sql[0]['gold']);
//$_SESSION['userInfo']['gold'] = $sql[0]['gold'];
dump($sql);


dump($_SESSION);


require ALL . '/obmennik.view.php';

?>