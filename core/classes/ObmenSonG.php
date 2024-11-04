<?php

namespace classes;

class ObmenSonG
{

protected int $silver;
protected int $gold;
protected int $user_id;
protected int $moneyObmen;
protected int $silverAll;
protected int $goldAll;
    public function __construct ()
    {
        $this->silver = $_SESSION['userInfo']['silver'];
        $this->gold = $_SESSION['userInfo']['gold'];
        $this->user_id = $_SESSION['userInfo']['user_id'];

    }













    public function getSilver()
    {
         return $this->silver;
    }
    public function setSilver()
    {

    }


    public function getGold()
    {
        return $this->gold;
    }
    public function setGold()
    {

    }

    public function getMoneyObmen()
    {
        return $this->moneyObmen;
    }
    public function setMoneyObmen($money)
    {
//        в золоте
        $this->moneyObmen = $money;
    }

    public function getSilverAll()
    {
        return $this->silverAll;
    }
    public function setSilverAll()
    {
        $this->silverAll = $this->silver - ($this->moneyObmen * 1000);
        return $this;
//        return $this->silver - ($this->moneyObmen * 1000);
    }

    public function getGoldAll()
    {
        return $this->goldAll;
    }
    public function setGoldAll()
    {
        $this->goldAll = $this->gold + $this->moneyObmen;
        return $this;
//        return $this->gold + $this->moneyObmen;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }








}

