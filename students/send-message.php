<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["student"]))
{
	header("Location: login.php");
}

$student = $_SESSION["student"];

$sid = $_GET["student"];

$sql = "SELECT * FROM tbl_student WHERE student = '$sid'";
$sresult = mysqli_query($dbcon, $sql);
$srow = mysqli_fetch_assoc($sresult);

$sqlmessage = "SELECT * FROM inbox_messages WHERE to_student = '$student'";
$mresult = mysqli_query($dbcon, $sqlmessage);
$messagecount = mysqli_num_rows($mresult);

$sqlrequests = "SELECT * FROM friends_requests WHERE to_student = '$student'";
$reqresult = mysqli_query($dbcon, $sqlrequests);
$requestcount = mysqli_num_rows($reqresult);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $srow["firstname"]; ?> <?php echo $srow["surname"]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/message-validation.js"></script>
    
    <style>
        body
        {
            background: url(../img/splash.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        footer
        {
            background-color: #25B99A;
            left: 0;
            bottom: 0;
            text-align: center;
            color: #FFFFFF;
            overflow: hidden;
            position: fixed;
        }
    </style>
    
</head>
    <body>
        
        <nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						MENU                        
					</button>
					<!-- <a href="../index.php" class="navbar-brand"> learnbe </a> -->
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li><a href="timeline.php"><span class='glyphicon glyphicon-home'></span> Izeo</a></li>
						<li><a href="timeline.php"><span class='glyphicon glyphicon-transfer'></span> Timeline</a></li>
						<li><a href="workroom.php"><span class='glyphicon glyphicon-book'></span> Work Room</a></li>
                        <li><a href="project.php"><span class='glyphicon glyphicon-file'></span> Projects</a></li>
						<li><a href="newsfeed.php"><span class='glyphicon glyphicon-globe'></span> News Feed</a></li>
                        <li><?php echo "<a href=profile.php?student=" . $srow["student"] . "><span class='glyphicon glyphicon-user'></span> Profile</a>"; ?></li>
				        
					</ul>
					<ul class="nav navbar-nav navbar-right">
                       <li><a href="friend-requests.php"><span class="glyphicon glyphicon-plus"></span> Friend Requests(<?php echo $requestcount; ?>)</a></li>
                        <li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages(<?php echo $messagecount; ?>)</a></li>
                        <li><a href="settings/account.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><?php echo "<a href='scripts/logout-student.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>"; ?></li>
					</ul>
				</div>
			</div>
		</nav>
        
        <div class="container text-center">
            <div id="messages-section">
              <?php
                    if($student != $sid)
                    {
                        echo
                        "<h1>Message " . $srow["firstname"] . " </h1><br /><br />" .
                        "<p id='messageval'></p>" .
                        "<img src=../profileimg/" . $srow["profileimg"] . " class='img-circle' width=120 height=120 alt='Profile Picture' /><br /><br />" . 
                        "<form action='send-message.php' name='messageform' onsubmit='return CheckMessage()' method='POST'>" .
                            " <input type='hidden' name='send_to' value=" . $sid . " />" .
                            " <input type='text' name='title' placeholder='Subject'/>" .
                            " <textarea class='form-control' rows='5' name='message'></textarea>" .
                            " <input type='submit' style='float:right;' class='button' name='send-msg' value='Send' />" .
                        "</form>";
                        
                        include 'scripts/database-connection.php';
                        if (isset($_POST["send-msg"]))
                        {
                            $send_to = $_POST["send_to"];
                            $send_to = mysqli_real_escape_string($dbcon, $send_to);
                            
                            $title = $_POST["title"];
                            $title = mysqli_real_escape_string($dbcon, $title);
                            
                            $message = $_POST["message"];
                            $message = mysqli_real_escape_string($dbcon, $message);
                            
                            $sendsql = "INSERT INTO inbox_messages (from_student, to_student, title, message) VALUES ('$student', '$send_to', '$title', '$message')";

                            if(mysqli_query($dbcon, $sendsql))
                            {
                                header("Location: messages.php");
                            }
                            else
                            {
                                echo mysqli_error($dbcon);
                            }
                        }
                    }
                    else
                    {   echo "<h3>" . $srow["firstname"] . ", you cannot send yourself a message." . "</h3>";
                        echo "<br /><img src=img/confused.svg height='200' width='200' class='img-responsive center-block' alt='confused_face'/><br /><br />";
                    }
                ?>
                
            </div>
            
              
        </div>
                
        <footer>
            <i><img src="../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center" style="color:black;">&copy; <h9 style="color:black;"><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>