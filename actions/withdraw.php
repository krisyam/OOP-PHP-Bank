<?php
session_start();

if($_POST['pin']==$_SESSION['user'][2]){
    if($_POST['withdraw']<$_SESSION['user'][1] && $_POST['withdraw']>100){
        $_SESSION['user'][1]-=$_POST['withdraw']+10;
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