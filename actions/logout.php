<?php
session_start();
$unum= $_SESSION['user'][3];
$_SESSION['users'][$unum][1]=$_SESSION['user'][1];




unset($_SESSION['user']); //destroy entire session 
header("Location: ../index.php");
?>