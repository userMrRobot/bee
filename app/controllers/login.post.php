<?php
global $db;
global $validator;


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['login']) and empty($_POST['pass']) ){
        header("location: /");
    }
//    дата должен пройти подготовку, удалить все пробелы и прочие проверки
    $login = $_POST['login'];
    $pass = $_POST['pass'];


    simpleValidator($login);
    simpleValidator($pass);

    if( simpleValidator($login) and simpleValidator($pass)){
        $user = $db->query("SELECT * FROM login WHERE login = :login", ['login' => $login]);
        dump($user);

        if (empty($user)) {
             addMess('danger-login', 'такого Логина нет или пароль не верный');
             header("location: /");
             die();
        }

        if(!password_verify($pass, $user[0]['password'])){
             addMess('danger-login', 'такого логина нет или Пароль не верный');
             header("location: /");
             die();
        }

        $_SESSION['user'] =['login' => $login,
                 'user_id' => $user['0']['id'],
                 'nikname' => $login,
                 'role' =>$user[0]['role']];

        addMess('avtor', 'Авторизация прошла успешно');


         header("location: /lk");
    }

    else{
        addMess('avtor-danger', 'Авторизация не удалась, повторите попытку');
        header("location: /");
    }





}