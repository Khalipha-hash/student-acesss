<?php
session_start();
include "database-connection.php";

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

$sql = "SELECT * FROM tbl_admin WHERE admin = '$username' and password = '$password'";

$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result) == 1)
{
	$_SESSION["username"] = $username;
	header("Location: ../admin-start.php");
}
else
{
	header("Location: ../login.php");
}
?>