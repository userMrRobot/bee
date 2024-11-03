<?php
global $db;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login =  $_POST['login'] ;
    $pass =  $_POST['pass'] ;


    simpleValidator($login);
    simpleValidator($pass);

    if( simpleValidator($login) and simpleValidator($pass)){
        $result = $db->getEmail($login);



        if (!empty($result)){
            echo 'такой логин уже зарегестрирован';
            dump($result[0]);
            addMess('login_busy', 'Такой логин занят, введите другой');
            header('Location: /register');
            die;
        }

        $db->startTransaction();
        $db->insertTransaction("INSERT INTO login (login, password, nikName) VALUES (:login, :pass, :nikname)",
                                    [':login'=> $login, ':pass' => password_hash($pass, PASSWORD_DEFAULT) , ':nikname' => $login]);
        $user_id = $db->last_user_id;
        $db->insertTransaction("INSERT INTO user_bee (user_id) VALUES (:user_id)",
            ['user_id'=> $user_id]);
        $db->insertTransaction("INSERT INTO gameMoney (user_id) VALUES (:user_id)",
            ['user_id'=> $user_id]);

        $db->insertTransaction("INSERT INTO register_data (user_id) VALUES (:user_id)",
            ['user_id'=> $user_id]);

        $result = $db->submitTransaction();
        if ($result)
        {

            addMess('register_done', 'Регистрация прошла успешно');
//            $_SESSION['user'] =['login' => $login,
//                      'user_id' => $user_id,
//                      'nikname' => $login];

            header("location: /login");
        }
        else{
            addMess('register_eror', 'Регистрация была прервана');
            header("location: /register");
        }


//        $_SESSION['warn'] = 'success';

//        $_SESSION['user'] =['login' => $login,
//                  'user_id' => $user_id,
//                  'nikname' => $login];
//
//        header("location: /lk");
    }

    else{
        header("location: /register");
    }


//нет безопасности!


}