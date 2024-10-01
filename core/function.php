<?php
function getEmail($login){
//    не безопасно
    $db_host = 'mysql-8.2';
    $db_name = 'bird';
    $db_login = 'root';
    $db_pass = '';

    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", "{$db_login}", "{$db_pass}");
    if ($pdo) echo "БД $db_name подключена ";
    else{
        die('Ошибка подключения');
    }
    $sql = "SELECT * FROM login WHERE login = :login";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['login' =>$login ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addUser($login, $pass, $nikname){
    //    не безопасно
    $db_host = 'mysql-8.2';
    $db_name = 'bird';
    $db_login = 'root';
    $db_pass = '';

    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", "{$db_login}", "{$db_pass}");
    if ($pdo) echo "БД $db_name подключена ";
    else{
        die('Ошибка подключения');
    }
    $sql = "INSERT INTO login (login, password, nikName) VALUES (:login, :pass, :nikname)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['login'=> $login, 'pass' => password_hash($pass, PASSWORD_DEFAULT) , 'nikname' => $nikname]);
    echo  "Пользователь {$login} добавлен";
}

function getMessage($message){
    //    не безопасно
    $_SESSION['warn'] = $message;
}

function login($login, $pass)
{
    $db_host = 'mysql-8.2';
    $db_name = 'bird';
    $db_login = 'root';
    $db_pass = '';
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", "{$db_login}", "{$db_pass}");
    if ($pdo) echo "БД $db_name подключена ";
    else {
        die('Ошибка подключения');
    }
    $sql = "SELECT * FROM login WHERE login = :login";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['login' => $login]);
    $result_login = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result_login);
    if (empty($result_login)) {
        echo 'такого логина нет';
    }
    if(!password_verify($pass, $result_login[0]['password'])){
        echo 'пароль неверный';
    }
    $_SESSION['user']['login'] = $result_login[0]['login'];
    $_SESSION['user']['nikName'] = $result_login[0]['nikName'];
    header('Location: lk.php');
}
