<?php

namespace classes;

class MedCount
{

    protected $bee_1;
    protected $bee_2;
    protected $bee_3;
    protected $med;
    protected $user_id;

    public function __construct()
    {
        $this->bee_1 = $_SESSION['userInfo']['bee1'];
        $this->bee_2 = $_SESSION['userInfo']['bee2'];
        $this->bee_3 = $_SESSION['userInfo']['bee3'];
        $this->user_id = $_SESSION['userInfo']['user_id'];
//
    }

    protected function setMed()
    {
        $this->med = (($this->bee_1 * 10) + ($this->bee_2 * 25) + ($this->bee_3 * 50));

//
    }

    public function countMed($db)
    {
        $this->setMed();
        $db->query("UPDATE gameMoney SET  med = :med WHERE user_id = :id",
            ['med'=> $this->med, 'id' => $this->user_id]);

        addMessGlobal('medCount', $this->med);
        return true;
    }


}