<?php

namespace classes;

class PayBee3 extends PayBee
{
//цена за голду 500
    public int $price_bee = 500;

    public function __construct()
    {
        parent::__construct();

        $this->bee = $_SESSION['userInfo']['bee3'];
        parent::setPrice();
        parent::payBeeGold();


    }

    public function query($db){



        $db->query("UPDATE gameMoney SET gold = :gold WHERE user_id = :id",
            ['gold' => $this->gold, 'id' => $this->user_id]);
        $db->query("UPDATE user_bee SET bee3 = :bee3 WHERE user_id = :id",
            ['bee3' => $this->bee, 'id' => $this->user_id]);
        addMessGlobal('gold', $this->gold);
        addMessGlobal('bee3', $this->bee);
        return true;
    }


}