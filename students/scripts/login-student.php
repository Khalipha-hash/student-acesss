<?php
session_start();
include "database-connection.php";

if(isset($_POST["student"]))
{
	$student = $_POST["student"];
    $student = stripslashes($student);
	$student = mysqli_real_escape_string($dbcon, $student);
}

if(isset($_POST["password"]))
{
	$password = $_POST["password"];
    $password = stripslashes($password);
	$password = mysqli_real_escape_string($dbcon, $password);
}

$sql = "SELECT * FROM tbl_student WHERE student = '$student' AND password = '$password'";

$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result) == 1)
{
	$_SESSION["student"] = $student;
    
    mysqli_query($dbcon, "UPDATE tbl_student SET last_activity = now() WHERE student = '$student' AND password = '$password'");
    
    mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student has just logged in now')");
    
    mysqli_query($dbcon, "UPDATE tbl_student SET engagement = engagement + 1 WHERE student = '$student'");
    
	header("Location: ../timeline.php");
}
else
{
	header("Location: ../login.php");
}
?>