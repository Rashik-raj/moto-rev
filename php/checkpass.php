<?php
require_once('dbconnect.php');
$uname=$_POST["username"];
$pass=$_POST["password"];
if(is_null($uname))
{
	die();
}

    $sql = "SELECT * FROM Admin WHERE Username='$uname' AND Password='$pass'";
    $result = $con->query($sql);

	if ($result->num_rows > 0)
	{
		$error_msg= " ";
		$return_arr = array("error_msg"=>$error_msg);
		echo json_encode($return_arr);
	}
	else
	{
		$error_msg="* Username and Password mismatched!!!";
		$return_arr = array("error_msg"=>$error_msg);
		echo json_encode($return_arr);
	}
?>