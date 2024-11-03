<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location: /shop");
}
global $db;
use classes\Game;


$user_id = $_SESSION['userInfo']['user_id'];
$id_bee = $_POST['id'];
//   1
$count_bee = $_POST['countBee'];


//   12
//нужна проверка на то сокльок можно купиить пчел и сколько купили проверка гибка для всех

    if (($count_bee > getMessGlobal("max_bee_{$id_bee}")) or ($count_bee < 1) ){
        newRecordInSession('error_count_bee', 'Введите коректное количество');
        header("location: /shop");
        die;
    }
//    тут все ок
    if($id_bee == 1) {
        $game_pay = new \classes\PayBee1();
        $game_pay->query($db);
        $med = new \classes\MedCount();
        $med->countMed($db);
        header("location: /lk");
        die;
    }

    elseif ($id_bee == 2){

        $game_pay = new \classes\PayBee2();
        $game_pay->query($db);
        $med = new \classes\MedCount();
        $med->countMed($db);
        header("location: /lk");
        die;
}

    elseif ($id_bee == 3){
        $game_pay = new \classes\PayBee3();
        $game_pay->query($db);
        $med = new \classes\MedCount();
        $med->countMed($db);
        header("location: /lk");
        die;


        dump($game_pay->setPrice($id_bee,$count_bee));
        $result = $game_pay->payBee3($id_bee, $count_bee);
        $bee = $result['bee3'];
        $gold = $result['gold'];
//        dump($bee);dump($gold);

        $game_pay->setMed();
        $med = $game_pay->getMed();
//        dump($med);
//        dump($game_pay->bee1);
//        dump($game_pay->bee2);
//        dd($game_pay->bee3);



        $db->query("UPDATE gameMoney SET gold = :gold WHERE user_id = :id",
            ['gold' => $gold, 'id' => $user_id]);
        $db->query("UPDATE user_bee SET bee3 = :bee3 WHERE user_id = :id",
            ['bee3' => $bee, 'id' => $user_id]);

        addMessGlobal('gold', $result['gold']);
        addMessGlobal('bee3', $result['bee3']);
        header("location: /lk");


    }

//изменение записей в бд с помощью транзакций





// запись соответсвующих данных в сесии и хедер на основную страницу