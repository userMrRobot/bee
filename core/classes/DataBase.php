<?php

namespace classes;
use PDO;
use PDOException;
use PDOStatement;






class DataBase
{
    protected PDO $connect;
    public int $last_user_id;


public function __construct($db)
{
    $this->connect = new PDO("mysql:host={$db['host']};dbname={$db['db_name']}", "{$db['db_login']}","{$db['db_pass']}");
    if (!$this->connect) {
        echo 'Не подключились';
    }
}


    public function query(string $sql, array $param = [])
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($param);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmail(string $login)
    {
       return $this->query("SELECT login FROM login WHERE login = :login",
           [':login' => $login]);

    }

    public function addUser(string $login, string $pass) :void
    {
    $this->query("INSERT INTO login (login, password, nikName) VALUES (:login, :pass, :nikname)",
        [':login'=> $login, ':pass' => password_hash($pass, PASSWORD_DEFAULT) , ':nikname' => $login]);
//    $result = $this->query("SELECT * FROM login WHERE login = :login", [':login' => $login]);
//    return $result[0]["id"];
    $this->last_user_id = $this->connect->lastInsertId();
    }


    public function startTransaction():void
    {
        $this->connect->beginTransaction();
    }

    public function insertTransaction($sql, $data) :void
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($data);
        $this->last_user_id = $this->connect->lastInsertId();
    }

    public function submitTransaction() :bool
    {
        try {
            $this->connect->commit();
        }
        catch(PDOException $e) {
            $this->connect->rollBack();
            return false;
        }
        return true;
    }












}