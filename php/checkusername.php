<?php
require_once('dbconnect.php');
$c=1;
$uname=$_POST["username"];
if(is_null($uname))
{
	die();
}

	$sql = "SELECT Username FROM Admin WHERE Username = '$uname'";
	$res = mysqli_query($con, $sql);
	if (mysqli_num_rows($res) != 0) 
	{	
		$c=0;//false
	}

	if ($c==0)
	{
		$error_msg="* Username has already been taken!!!";
		$return_arr = array("error_msg"=>$error_msg);
		echo json_encode($return_arr);
	}
	else
		{
		$error_msg="";
		$return_arr = array("error_msg"=>$error_msg);
		echo json_encode($return_arr);
	}
