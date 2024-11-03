<?php

namespace classes;
global $db;
class Game
{
    protected int $user_id;
    protected int $silver;
    protected int $gold;

    protected int $med;


    public int $bee1;
    public int $bee2;
    public int $bee3;
    public int $allBee;

    private int $price_bee1 = 500;
    private int $price_bee2 = 5000;
    private int $price_bee3 = 500;

    public function __construct(){
        $this->user_id = $_SESSION['userInfo']['user_id'];
        $this->silver = $_SESSION['userInfo']['silver'];
        $this->gold = $_SESSION['userInfo']['gold'];
//        $this->rub = $_SESSION['userInfo']['rub'];
//        $this->credit_rub = $_SESSION['userInfo']['rubCredit'];
//        $this->med = $_SESSION['userInfo']['med'];
        $this->bee1 = $_SESSION['userInfo']['bee1'];
        $this->bee2 = $_SESSION['userInfo']['bee2'];
        $this->bee3 = $_SESSION['userInfo']['bee3'];
//

    }

    public function setPrice ($idBee, $count){
        if($idBee == 1){
           return $this->price_bee1 *= $count;
        }
        elseif($idBee == 2){
            return $this->price_bee2 *= $count;
        }
        elseif($idBee == 3){
            return $this->price_bee3 *= $count;
        }
    }

    public function payBee1($idBee, $countBee)
    {
        $this->silver -= $this->price_bee1;
        $this->bee1 += $countBee;
        return ['bee1' => $this->bee1,
                'silver' => $this->silver];

    }
    public function payBee2($idBee, $countBee)
    {
        $this->silver -= $this->price_bee2;
        $this->bee2 += $countBee;
        return ['bee2' => $this->bee2,
                'silver' => $this->silver];



    }

    public function payBee3($idBee, $countBee)
    {
        $this->gold -= $this->price_bee3;

        $this->bee3 += $countBee;
        return ['bee3' => $this->bee3,
                'gold' => $this->gold];

    }

    public function setMed()
    {
        $this->med = (($this->bee1 * 10) + ($this->bee2 * 25) + ($this->bee3 * 50));
//        $this->med+= $this->bee3 * 50;
    }

    public function getMed()
    {
        return $this->med;
    }

    public function updateBdCredit(DataBase $db,int $user_id )
    {
        $db->query("UPDATE gameMoney SET silver = :silver WHERE user_id = :user_id",
            [':silver' => $this->silver,':user_id' => $user_id]);

    }

    public function updateBdGold(DataBase $db,int $user_id )
    {
        $db->query("UPDATE gameMoney SET silver = :silver, gold = :gold WHERE user_id = :user_id",
            [':silver' => $this->silver, ':gold' =>$this->gold,':user_id' => $user_id]);

    }


    public function setCreditAll($credMoney)
    {
    $this->silver += $credMoney;
    $this->credit_rub += $credMoney;

    }
//    public function setCredit($Money)
//    {
//        $this->credit_rub = $Money;
//        return $this;
//
//
//    }

    public function getCredit()
    {
        return $this->credit_rub;
    }

    public function setGold($Money)
    {
        $this->gold = $Money;
        return $this;


    }

    public function getGold()
    {
        return $this->gold;
    }

    public function setSilver($Money)
    {
        $this->silver = $Money;
        return $this;

    }

    public function getSilver()
    {
        return $this->silver;
    }

    public function setRub($Money)
    {
        $this->rub = $Money;
        return $this;

    }

    public function getRub()
    {
        return $this->rub;
    }























   public function game_time_return()
    {
        $now_all = getdate();
        $now = ['месяц'=>$now_all['mon'],
            'день' => $now_all['mday'],
            'час' => $now_all['hours']];
        $count_1 = ($now['месяц'] * 24 * 30) + ($now['день'] * 24) + $now['час'];
        return $count_1;
    }

    public function game_time_pay()
    {
        $now_all = getdate();
        $now = ['месяц'=>$now_all['mon'],
            'день' => $now_all['mday'],
            'час' => $now_all['hours']];
        $count_1 = ($now['месяц'] * 24 * 30) + ($now['день'] * 24) + $now['час'];
        return $count_1;
    }





















}