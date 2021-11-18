<?php
session_start();
include "init-account.php";


if(!isset($_SESSION['users'])){
    $_SESSION['users']=array();
    foreach($user AS $temp){
        array_push($_SESSION['users'],array($temp->accountNum, $temp->balance, $temp->accesspin()));
    }
}
print_r($_SESSION['users']);
echo '<br>';

$unum=0;
foreach($user AS $temp){
    if($temp->checknum($_POST['accountNum'])==1 && $temp->checkpin($_POST['pin'])==1){
        $_SESSION['user']=array();
        $bal = $_SESSION['users'][$unum][1];
        array_push($_SESSION['user'], $temp->accountNum, $bal, $temp->accesspin(), $unum);
        print_r($_SESSION['user']);
        header('Location: ../main.php');
        exit();
    }
    $unum++;
}
header('Location: ../index.php?error=Wrong Account Number or Pin');
exit();

?>