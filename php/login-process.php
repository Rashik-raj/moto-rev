<?php
require_once('dbconnect.php');
session_start();
$user=$_POST["username"];
$pass=$_POST["password"];
$error=false;

$sql="SELECT * FROM Admin";
$result = $con->query($sql);
while($row = $result->fetch_assoc())
{
	if ($row["Username"]==$user && $row["Password"]==$pass)
	{
		$_SESSION["username"]= $user;
		header('location: ../admin/home.php');
	}
	else
	{
		$error=true;
	}
}
if ($error) {
	header('location: ../admin/login.php');
}
?>