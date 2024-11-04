<?php
if(!isset($_SESSION['user'])){
    header("location: /register");
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    global $db;

    $user_id = $_SESSION['user']['user_id'];
    $sql = $db->query("SELECT *  FROM gameMoney WHERE user_id = :user_id ",[':user_id' => $user_id]);
    $_SESSION['userInfo']['credit_silver'] = $sql[0]['credit_silver'];
    $_SESSION['userInfo']['credit_silver_all'] = $sql[0]['credit_silver_all'];

    $sql = $db->query("SELECT *  FROM register_data WHERE user_id = :user_id ",[':user_id' => $user_id]);
    $_SESSION['userInfo']['data_get_credit'] = $sql[0]['data_get_credit'] ?? 0;
    $_SESSION['userInfo']['data_set_credit'] = $sql[0]['data_set_credit'] ?? 0;

    $title = 'Получение кредита';


    dump($_SESSION);


    require ALL . '/credit.view.php';

}

?>