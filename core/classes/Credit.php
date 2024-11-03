<?php

namespace classes;

class Credit
{
    protected int $silver_get_post;
    protected int $credit_silver;
    protected int $credit_silver_all;
    protected int $silver;
    protected int $user_id;
    protected $time_get_credit ;
    protected $data_credit;
    protected $pay_data_credit;

    public function __construct()
    {
        $this->silver_get_post = $_POST['moneyObmen'];
        $this->silver = $_SESSION['userInfo']['silver'];
        $this->credit_silver = $_SESSION['userInfo']['credit_silver'];
        $this->credit_silver_all = $_SESSION['userInfo']['credit_silver_all'];
        $this->user_id = $_SESSION['userInfo']['user_id'];

//        $this->time_get_credit = $_SESSION['userInfo']['data_get_credit'];
//        $this->data_set_credit = $_SESSION['userInfo']['data_set_credit'];
    }


    protected function setSilver()
    {
        $this->silver += $this->silver_get_post;

    }

    protected function setCredit(){
        $this->credit_silver += $this->silver_get_post;
        $this->credit_silver_all += ($this->silver_get_post * 1.1) ;
    }
    protected function setCreditData(){
        $this->data_credit = date("Y-m-d");
    }
    protected  function payCreditData()
    {
//        $newDate = date('Y-m-d', strtotime($date . ' + 7 days'));
        $this->pay_data_credit = date("Y-m-d", strtotime($this->data_credit . ' + 7 days'));
    }
    protected function setCreaditNum(){
        $this->time_get_credit = time();
    }
//
//$credit_all = $_SESSION['userInfo']['rubCredit'] + $moneyPost;
//$silver_all = $_SESSION['userInfo']['silver'] + $moneyPost;

    public function getCredit($db)
    {
        $this->setSilver();
        $this->setCredit();
        $this->setCreaditNum();
        $this->payCreditData();
        $db->query("UPDATE gameMoney SET silver = :silver, credit_silver = :credit_silver, credit_silver_all = :credit_silver_all WHERE user_id = :user_id",
            [':silver' => $this->silver, ':credit_silver' => $this->credit_silver,
                ':credit_silver_all' => $this->credit_silver_all ,':user_id' => $this->user_id]);

        $db->query("UPDATE register_data SET data_reg_credit = CURDATE(), data_pay_credit = :data_pay_credit, time_get_credit = :time_get_credit WHERE user_id = :user_id",
            [':time_get_credit' => $this->time_get_credit, 'data_pay_credit' => 0, ':user_id' => $this->user_id]);

        return true;

    }









}