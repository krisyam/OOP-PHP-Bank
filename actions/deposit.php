<?php
session_start();

if($_POST['pin']==$_SESSION['user'][2]){
    if($_POST['deposit']>100){
        $_SESSION['user'][1]+=$_POST['deposit'];
        header('Location: ../main.php');
        exit();
    } else{
        header('Location: ../main.php?error=Below the minimum deposit amount');
        exit();
    }
} else{
    header('Location: ../main.php?error=Incorrect Pin');
    exit();
}
?>