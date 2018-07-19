<?php
require_once('php/dbconnect.php');

//create database and tables
$sql = "CREATE DATABASE moto_rev";
if($con->query($sql) === TRUE)
{
	echo "moto_rev database created successfully<br>";
}
else
{
	echo "moto_rev database exist<br>";
}

$sql1 = "CREATE TABLE `moto_rev`.`Car` ( `S.N` INT NOT NULL AUTO_INCREMENT , `Brand` VARCHAR(50) NOT NULL , `Logo` VARCHAR(200) NOT NULL , `Created date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`S.N`)) ENGINE = InnoDB;";

	if ($con->query($sql1) === TRUE)
	{
		echo "Car table created inside moto_rev<br>";
	}
	else
	{
		echo "Car table exist inside moto_rev<br>";
	}

$sql2 = "CREATE TABLE `moto_rev`.`Bike` ( `S.N` INT NOT NULL AUTO_INCREMENT , `Brand` VARCHAR(50) NOT NULL , `Logo` VARCHAR(200) NOT NULL , `Created date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`S.N`)) ENGINE = InnoDB;";

	if ($con->query($sql2) === TRUE)
	{
		echo "Bike table created inside moto_rev<br>";
	}
	else
	{
		echo  "Bike table exist inside moto_rev<br>";
	}

$sql3 = "CREATE TABLE `moto_rev`.`Admin` ( `S.N` INT NOT NULL AUTO_INCREMENT , `Username` VARCHAR(20) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Code` VARCHAR(20) NOT NULL , PRIMARY KEY (`S.N`)) ENGINE = InnoDB;";
	if ($con->query($sql3) === TRUE)
	{
		echo "Admin table created inside moto_rev<br>";
		$sql4 = "INSERT INTO `Admin`(`S.N`, `Username`, `Password`) VALUES (NULL, 'admin' ,'admin123')";
		$con->query($sql4);
	}
	else
	{
		echo  "Admin table exist inside moto_rev<br>";
	}
?>