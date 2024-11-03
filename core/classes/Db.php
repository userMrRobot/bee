<?php

namespace classes;

use PDOException;
use PDOStatement;
use PDO;

class Db
{
protected $pdo;
protected $stmt;
public $user_id;

public function __construct($db_config){

    $this->pdo = new PDO("mysql:host={$db_config['host']};dbname={$db_config['db_name']}", "{$db_config['db_login']}", "{$db_config['db_pass']}");
    
    if ($this->pdo) echo "БД {$db_config['db_name']} подключена ";
    else {
        die('Ошибка подключения');
    }

}

    public function getEmail($login){
//    не безопасно

        $sql = "SELECT * FROM login WHERE login = :login";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['login' =>$login ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
//фун-я добавления пользователя при регистрации
   public function addUser($login, $pass){
        //    не безопасно

        $sql = "INSERT INTO login (login, password, nikName) VALUES (:login, :pass, :nikname)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['login'=> $login, 'pass' => password_hash($pass, PASSWORD_DEFAULT) , 'nikname' => $login]);
           $sql = "SELECT * FROM login WHERE login = :login";
           $stmt = $this->pdo->prepare($sql);
           $stmt->execute(['login' => $login]);
       $result_login = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $result_login['0']['id'];

    }

//фун-я добавления пчел  пользователя при регистрации
public function addBee($user_id){
    $sql = "INSERT INTO user_bee (user_id) VALUES (:user_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['user_id'=> $user_id]);
    return $this;
}
//фун-я добавления денег пользователя при регистрации
public function addMoney($user_id){
    $sql = "INSERT INTO gameMoney (user_id) VALUES (:user_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['user_id'=> $user_id]);
    return $this;
}
//фун-я логирования
    public function login($login, $pass)
    {

        $sql = "SELECT * FROM login WHERE login = :login";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['login' => $login]);
        $result_login = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result_login)) {
            echo 'такого логина нет';
            die();
        }
        if(!password_verify($pass, $result_login[0]['password'])){
            echo 'пароль неверный';
            die;
        }
        return $result_login[0]['id'];



    }

    public function chech_info_lk($user_id)
    {
       $sql =  "SELECT * FROM `gameMoney` 
                JOIN user_bee ON user_bee.user_id = gameMoney.user_id 
                WHERE gameMoney.user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(['user_id' => $user_id]);
        $result_login = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result_login;
        }





    public function getMessage($message){
        //    не безопасно
        $_SESSION['warn'] = $message;
    }














}