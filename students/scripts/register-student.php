<?php
	session_start();
	include "database-connection.php";


	if(isset($_POST["fname"]))
	{
		$fname = $_POST["fname"];
		$fname = stripslashes($fname);
		$fname = mysqli_real_escape_string($dbcon, $fname);
	}

	if(isset($_POST["sname"]))
	{
		$sname = $_POST["sname"];
		$sname = stripslashes($sname);
		$sname = mysqli_real_escape_string($dbcon, $sname);
	}

	if(isset($_POST["username"]))
	{
		$username = $_POST["username"];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($dbcon, $username);
	}

	if(isset($_POST["password"]))
	{
		$password = $_POST["password"];
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($dbcon, $password);
	}

	if(isset($_POST["cpassword"]))
	{
		$cpassword = $_POST["cpassword"];
		$cpassword = stripslashes($cpassword);
		$cpassword = mysqli_real_escape_string($dbcon, $cpassword);
	}


	$sql = "INSERT INTO tbl_student (firstname,surname,password,student)  VALUES ('$fname','$sname','$password','$username')";

	$result = mysqli_query($dbcon, $sql);

	if(mysqli_query($dbcon, $sql))
	{
		header("Location: ../login.php");
	}
	else
	{
		header("Location: ../login.php");
		// echo mysqli_error($dbcon);
	}
?>