<?php
require_once('dbconnect.php');
session_start();
$user=$_POST["username"];
$pass=$_POST["password"];


$sql = "INSERT INTO `Admin`(`S.N`, `Username`, `Password`) VALUES (NULL, '$user' ,'$pass')";
$con->query($sql);
header('location: ../admin/login.php');
?>