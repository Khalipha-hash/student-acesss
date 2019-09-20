<?php
include 'database-connection.php';

if(isset($_POST["student"]))
{
	$student = $_POST["student"];
}

if(isset($_POST["subject"]))
{
	$subject = $_POST["subject"];
    $subject = stripslashes($subject);
    $subject = mysqli_real_escape_string($dbcon, $subject);
}

if(isset($_POST["title"]))
{
	$title = $_POST["title"];
    $title = stripslashes($title);
    $title = mysqli_real_escape_string($dbcon, $title);
}

if(isset($_POST["body"]))
{
	$body = $_POST["body"];
    $body = stripslashes($body);
    $body = mysqli_real_escape_string($dbcon, $body);
}
$sql = "INSERT INTO tbl_forum (student, subject, title, body) VALUES ('$student', '$subject', '$title', '$body')";

if(mysqli_query($dbcon, $sql))
{
	header("Location: ../explore.php");
    
    mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student just created a forum discussion')");
    
    mysqli_query($dbcon, "UPDATE tbl_student SET engagement = engagement + 3 WHERE student = '$student'");
}
else
{
	echo mysqli_error($dbcon);
}
?>