<?php
include 'database-connection.php';

if(isset($_POST["uploadimg"]))
{
	$student = $_POST["student"];
    
    $sid = $_GET["student"];

    if ($_FILES["img_file"]["type"] == "image/jpg" || $_FILES["img_file"]["type"] == "image/jpeg" || $_FILES["img_file"]["type"] == "image/png")
    {   
        if (move_uploaded_file($_FILES["img_file"]["tmp_name"], "../images/".$_FILES["img_file"]["name"]))
        {
            $img = $_FILES["img_file"]["name"];
            
            
            $sql = "INSERT INTO images (student, postto, image) VALUES ('$student', '$sid', '$img')";
            
            mysqli_query($dbcon, $sql);
            
            header("Location: ../timeline.php");
        }
        else
        {
            echo "Error uploading image";
        }
    }
    
}
?>