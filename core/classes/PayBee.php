<?php

namespace classes;

abstract class PayBee
{
    protected $user_id;
    protected int $silver;
    protected int $gold;
    protected int $bee;
    protected int $price_bee;
    protected int $price_all_bee;
    protected int $count_bee;



    public function __construct()
    {
        $this->user_id = $_SESSION['userInfo']['user_id'];
        $this->silver = $_SESSION['userInfo']['silver'];
        $this->gold = $_SESSION['userInfo']['gold'];


        $this->count_bee = $_POST['countBee'];
    }


    protected function setPrice()
    {
        $this->price_all_bee = $this->price_bee * $this->count_bee;

    }

    protected function payBee()
    {
        $this->silver -= $this->price_all_bee;
        $this->bee += $this->count_bee;
        return ['bee' => $this->bee,'silver' => $this->silver];

    }
    protected function payBeeGold()
    {
        $this->gold -= $this->price_all_bee;
        $this->bee += $this->count_bee;
        return ['bee' => $this->bee,'gold' => $this->gold];

    }



}