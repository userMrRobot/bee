<?php



function getMessage($message){
    //    не безопасно
    $_SESSION['warn'] = $message;
}



function simpleValidator(string $str):bool
{
    if( preg_match("/^[a-z A-Z0-9]+$/i",$str) ){
        echo "Введены только разрешенные символы";
        return true;
    }

    else{
        addMess('login_eror_validate', 'Разрешено использовать латинские символы и цифры');
        return false;
    }
}

function dump($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function dd($data)
{
    dump($data);
    die;
}

function checkAuth(){
    return isset($_SESSION['user']);
}
function game_time(\classes\DataBase $db)
{
    if (!empty(getMessGlobal('bee1')) or !empty(getMessGlobal('bee2')) or !empty(getMessGlobal('bee3'))){


    if($_SESSION['inforeg']['time_last'] === 0){
        $_SESSION['inforeg']['time_last'] = time();
        $last_update = $_SESSION['inforeg']['time_last'];
        $user_id = $_SESSION['userInfo']['user_id'];
        $db->query("UPDATE register_data SET time_last = :time_last WHERE user_id = :user_id",
                        ['time_last'=>$last_update, 'user_id' =>$user_id]);

    }
    $now = time();
    dump($now);
    $min_in_sec = 60;
    if ($now - $_SESSION['inforeg']['time_last'] >= $min_in_sec) {
        $count = floor(($now - $_SESSION['inforeg']['time_last']) / $min_in_sec);
        dump($count);
        $incr = $_SESSION['userInfo']['med'] * $count;
        dump($incr);
        $_SESSION['userInfo']['medAll'] += $incr;
        $medAll = $_SESSION['userInfo']['medAll'];
        $user_id = $_SESSION['userInfo']['user_id'];
        $db->query("UPDATE gameMoney SET medAll = :medAll WHERE user_id = :user_id",
            ['medAll' => $medAll, 'user_id'=>$user_id]);
        $_SESSION['last_update'] = $now;
        $last_update = $_SESSION['last_update'];
        $db->query("UPDATE register_data SET time_last = :time_last WHERE user_id = :user_id",
            ['time_last' => $last_update, 'user_id'=>$user_id]);
    }
    }
}

function getTimeCredit(\classes\DataBase $db)
{
    if($_SESSION['inforeg']['time_get_credit'] != 0){
//        вот тут
        $_SESSION['inforeg']['time_set_credit'] = time();
        $day_credit = floor((time() - $_SESSION['inforeg']['time_get_credit']) / 86400);
        $db->query("UPDATE register_data SET day_for_credit = :day_for_credit WHERE user_id = :user_id",
            ['day_for_credit' => $day_credit, 'user_id'=>$_SESSION['userInfo']['user_id']]);
    }


}

function dayCredit(\classes\DataBase $db)
{
    if($_SESSION['inforeg']['data_pay_credit'] != 0){
        addMessInInforeg('day_for_credit',0 );
    }
    else
    {
        $get_credit = $_SESSION['inforeg']['time_get_credit'];
        $day_for_credit = $_SESSION['inforeg']['day_for_credit'];
        $set_credit = time();

        if($set_credit > $get_credit and $day_for_credit < 8){
            $day = floor(($set_credit - $get_credit) / 86400);
            addMessInInforeg('day_for_credit',$day );
            return "Дней прошло {$day}" ;

        }}




}

function CheckDayCredit(\classes\DataBase $db)
{
    if(getMessInInforeg('day_for_credit') > 7){
        if(getMessGlobal('silver') >= getMessGlobal('credit_silver_all')){
            $silver = getMessGlobal('silver') - getMessGlobal('credit_silver_all');
            $user_id = $_SESSION['userInfo']['user_id'];

            $db->query("UPDATE gameMoney SET credit_silver = :credit_silver, silver = :silver, credit_silver_all = :credit_silver_all WHERE user_id = :user_id",
                ['credit_silver' => 0, 'silver' => $silver,'credit_silver_all' => 0, 'user_id'=>$user_id]);
            $db->query("UPDATE register_data SET data_pay_credit = CURDATE(), time_get_credit = :time_get_credit WHERE user_id = :user_id",
                ['time_get_credit' => 0, 'user_id'=> $user_id]);


        }
        else
        {
            newRecordInSession('erorDayCredit', "Пополните серебро в размере {$_SESSION['userInfo']['credit_silver_all']} для погашания кредита");
            header('location: /sell');
            die;
        }
    }
}

// создает запись о ошибке в сессию
function addMess($name, $message)
{
    $_SESSION["$name"] = $message;

}
function addMessGlobal($name, $message)
{
    $_SESSION['userInfo']["$name"] = $message;
}
// выводит запись об ошибке из сессии
//function getMess($name)
//{
//    return $_SESSION["$name"];
//}

function delMess($name)
{
    unset($_SESSION["$name"]);
}


function newRecordInSession ($name, $data)
{
    $_SESSION[$name] = $data;
}

function getRecordInSession($name)
{
    return $_SESSION[$name];
}
function getMessGlobal($name)
{
    return $_SESSION['userInfo'][$name];
}

function getMessInInforeg ($name)
{
    return $_SESSION['inforeg'][$name];
}
function addMessInInforeg($name, $message)
{
    $_SESSION['inforeg']["$name"] = $message;
}
