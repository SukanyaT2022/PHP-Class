<?php
class Account
{
private $accountnum=101;
private $accountname=“xyz”;
private $accountbalance=5000;

function deposit($amount)
{
this->$accountbalance += $amount;
}
function withdraw($amount)
{
if(this->$accountbalance < $amount)
{
echo “Insufficient balance”;
}
else{
this->$accountbalance -= $amount;
}
}

}

$myaccount = new Account();//object
$myaccount.deposit(1000);


?>