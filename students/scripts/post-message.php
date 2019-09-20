<?php
include 'database-connection.php';

if(isset($_POST["student"]))
{
	$student = $_POST["student"];
}

if(isset($_POST["postto"]))
{
	$sid = $_POST["postto"];
    $sid = stripslashes($sid);
    $sid = mysqli_real_escape_string($dbcon, $sid);
}

if(isset($_POST["post"]))
{
	$post = $_POST["post"];
    $post = stripslashes($post);
    $post = mysqli_real_escape_string($dbcon, $post);
}

$sql = "INSERT INTO posts (student, postto, post) VALUES ('$student', '$sid', '$post')";

if(mysqli_query($dbcon, $sql))
{
	header("Location: ../timeline.php");
    
    mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student just posted a message')");
    
    mysqli_query($dbcon, "UPDATE tbl_student SET engagement = engagement + 1 WHERE student = '$student'");
}
else
{
	echo mysqli_error($dbcon);
}
?>