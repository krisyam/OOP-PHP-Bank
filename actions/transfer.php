<?php
session_start();
$unum= count($_SESSION['users']);

if($_POST['pin']==$_SESSION['user'][2]){
    if($_POST['transfer']<$_SESSION['user'][1] && $_POST['transfer']>100){
        for($x=0;$x<$unum;$x++){
            if($_SESSION['users'][$x][0]==$_POST['accountNum']){
                $_SESSION['user'][1]-=$_POST['transfer'];
                $_SESSION['users'][$x][1]+=$_POST['transfer'];
            }
        }
        
        header('Location: ../main.php');
        exit();
    } else{
        header('Location: ../main.php?error=Insufficient balance or below the minimum withdrawal amount');
        exit();
    }
} else{
    header('Location: ../main.php?error=Incorrect Pin');
    exit();
}
?>