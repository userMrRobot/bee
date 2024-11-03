<?php
use classes\ObmenSonG;

if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location:/obmen");
}

//$goldMax = $_SESSION["userInfo"]['gold_max'];
if ($_POST['moneyObmen'] < 1 or $_POST['moneyObmen'] > getMessGlobal('gold_max')){
//    создать уведомление
    header("location: /obmen");
}

global $db;

$obmenSonG = new ObmenSonG();
$obmenSonG->setMoneyObmen($_POST['moneyObmen']);
$obmenSonG->setSilverAll()->setGoldAll();


try {
    $db->query("UPDATE gameMoney SET silver = :silver, gold = :gold WHERE user_id = :user_id",
        ['silver'=> $obmenSonG->getSilverAll() , 'gold'=> $obmenSonG->getGoldAll(),'user_id'=> $obmenSonG->getUser_id()]);
    addMess('grenObmen', 'Обмен завершился успешно');
    header("location: /lk");
}
catch (PDOException $e){
    addMess('erorObmen', 'Процес обмена завершился с ошибкой');
    header("location: /obmen");
}












