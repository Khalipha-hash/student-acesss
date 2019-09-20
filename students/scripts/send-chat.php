<?php
include 'database-connection.php';

if(isset($_POST["username"]))
{
	$student = $_POST["username"];
}

if(isset($_POST["chat"]))
{
	$message = $_POST["chat"];
    $message = stripslashes($message);
    $message = mysqli_real_escape_string($dbcon, $message);
}

$sql = "INSERT INTO tbl_chat (username, message) VALUES ('$student', '$message')";

if(mysqli_query($dbcon, $sql))
{
	header("Location: ../chat.php");
}

?>