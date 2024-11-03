<?php

namespace classes;

class PayBee1 extends PayBee
{
    public int $price_bee = 500;


    public function __construct()
    {
        parent::__construct();

        $this->bee = $_SESSION['userInfo']['bee1'];
        parent::setPrice();
        parent::payBee();


    }







    public function query($db){



        $db->query("UPDATE gameMoney SET silver = :silver WHERE user_id = :id",
            ['silver' => $this->silver, 'id' => $this->user_id]);
        $db->query("UPDATE user_bee SET bee1 = :bee1 WHERE user_id = :id",
            ['bee1' => $this->bee, 'id' => $this->user_id]);
        addMessGlobal('silver', $this->silver);
        addMessGlobal('bee1', $this->bee);
        return true;
}


}

