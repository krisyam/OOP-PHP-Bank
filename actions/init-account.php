<?php


class user{
    public $accountNum;
    public $balance;
    protected $pin;
    function setaccountNum($num){
        $this->accountNum = $num;
    }
    function setbalance($balance){
        $this->balance = $balance;
    }
    function setpin($pin){
        $this->pin = $pin;
    }
    function accesspin(){
        return $this->pin;
    }
    function checknum($postdata){
        if($this->accountNum == $postdata){
            return 1;
        } else{
            return 0;
        }
    }
    function checkPin($postdata){
        if($this->pin == $postdata){
            return 1;
        } else{
            return 0;
        }
    }
}


$u1001 = new user();
$u1001->setaccountNum(1001);
$u1001->setbalance(30000);
$u1001->setpin(1);

$u1002 = new user();
$u1002->setaccountNum(1002);
$u1002->setbalance(2000);
$u1002->setpin(1);

$user = array($u1001, $u1002);
?>