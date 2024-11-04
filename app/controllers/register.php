<?php

global $db;

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $title = 'Страница регистрации';
    require ALL . "/register.view.php";
}



//    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", "{$db_login}", "{$db_pass}");
//    if ($pdo) echo "БД $db_name подключена ";
//    else{
//        die('Ошибка подключения');
//    }
//    $sql = "SELECT * FROM login WHERE login = :login";
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['login' => $login]);
//    $result = $stmt->fetch(PDO::FETCH_ASSOC);

//    if (!empty($result)){
//        echo 'такой логин уже зарегестрирован';
//        $_SESSION['warn'] = 'danger';
//        header('Location: register.view.php');
//
//
//    }

//    $sql = "INSERT INTO login (login, password, nikName) VALUES (:login, :pass, :nikname)";
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['login'=> $login, 'pass' => password_hash($pass, PASSWORD_DEFAULT) , 'nikname' => $nikname]);
//    echo  "Пользователь {$login} добавлен";
//    $_SESSION['warn'] = 'success';
//
//        header('Location: index.php');
















//header("Location: index.php");


?>
