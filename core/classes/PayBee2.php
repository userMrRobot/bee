<?php

namespace classes;

class PayBee2 extends PayBee
{

    public int $price_bee = 5000;

    public function __construct()
    {
        parent::__construct();

        $this->bee = $_SESSION['userInfo']['bee2'];
        parent::setPrice();
        parent::payBee();


    }

    public function query($db){



        $db->query("UPDATE gameMoney SET silver = :silver WHERE user_id = :id",
            ['silver' => $this->silver, 'id' => $this->user_id]);
        $db->query("UPDATE user_bee SET bee2 = :bee2 WHERE user_id = :id",
            ['bee2' => $this->bee, 'id' => $this->user_id]);
        addMessGlobal('silver', $this->silver);
        addMessGlobal('bee2', $this->bee);
        return true;
    }



}