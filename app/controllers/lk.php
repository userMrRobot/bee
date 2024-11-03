<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
global $db;
$title = 'Личный кабинет';



    $user_id = $_SESSION['user']['user_id'];
    
    $data = $db->query("SELECT * FROM `gameMoney` 
                JOIN user_bee ON user_bee.user_id = gameMoney.user_id
                WHERE gameMoney.user_id = :user_id",
                [':user_id' => $user_id]);
    $data_time = $db->query("SELECT * FROM `register_data` WHERE user_id = :user_id",
                [':user_id' => $user_id]);


    newRecordInSession('userInfo', $data[0]);
    if (!empty($data_time[0])){
        newRecordInSession('inforeg', $data_time[0]);
    }
    game_time($db);
    getTimeCredit($db);
//dayCredit($db)

    if ( dayCredit($db) > 7){
        CheckDayCredit($db);
    };




   
   dump($_SESSION);
require ALL . "/lk.view.php";
