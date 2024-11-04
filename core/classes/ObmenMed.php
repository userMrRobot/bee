<?php

namespace classes;

class ObmenMed
{

public $input_med_obmen;
private $silver;
private $med_all;
private $user_id;

    public function __construct()
    {
        $this->input_med_obmen = $_POST['medObmen'];
        $this->silver = $_SESSION['userInfo']['silver'];
        $this->med_all = $_SESSION['userInfo']['medAll'];
        $this->user_id = $_SESSION['userInfo']['user_id'];

        $this->setSilver();
        $this->setMedAll();
    }

    private function setSilver()
    {
        $this->silver += floor(($this->input_med_obmen / 10));
    }

    private function setMedAll()
    {
        $this->med_all -= $this->input_med_obmen;
    }


    public function db($db)

    {

        $db->query('UPDATE `gameMoney` SET silver = :silver, medAll = :medAll WHERE user_id = :user_id',
            ['silver' => $this->silver, 'medAll'=> $this->med_all, 'user_id'=>$this->user_id]);
        newRecordInSession('obmen_done','Продажа меда прошла успешно');
        header("location: /lk");
    }






}