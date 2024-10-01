<?php
session_start();
require 'function.php';
$login =  $_POST['login'] ;
$pass =  $_POST['password'] ;
$nikname =  $_POST['nameNik'] ;
$db_host = 'mysql-8.2';
$db_name = 'bird';
$db_login = 'root';
$db_pass = '';
//нет безопасности!
$result = getEmail($login);
var_dump($result);
if (!empty($result)){
    echo 'такой логин уже зарегестрирован';
    $_SESSION['warn'] = 'danger';
    header('Location: view/register.view.php');
}

addUser($login, $pass, $nikname);
echo  "Пользователь {$login} добавлен";
$_SESSION['warn'] = 'success';

header('Location: index.php');

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
