<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["student"]))
{
	header("Location: login.php");
}

$student = $_SESSION["student"];

$fid = $_GET["forumid"];

$sqlmessage = "SELECT * FROM inbox_messages WHERE to_student = '$student'";
$mresult = mysqli_query($dbcon, $sqlmessage);
$messagecount = mysqli_num_rows($mresult);

$sqlrequests = "SELECT * FROM friends_requests WHERE to_student = '$student'";
$reqresult = mysqli_query($dbcon, $sqlrequests);
$requestcount = mysqli_num_rows($reqresult);

$sqlrep = "SELECT * FROM tbl_forum JOIN tbl_forum_replies ON tbl_forum.forumid = tbl_forum_replies.forumid WHERE tbl_forum.forumid = '$fid'";
$represult = mysqli_query($dbcon, $sqlrep);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forum Replies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/post-validation.js"></script>
    
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
					<a href="../index.php" class="navbar-brand"> learnbe </a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
                        <li><a href="timeline.php"><span class='glyphicon glyphicon-transfer'></span> Timeline</a></li>
						<li><a href="workroom.php"><span class='glyphicon glyphicon-book'></span> Work Room</a></li>
                        <li><a href="project.php"><span class='glyphicon glyphicon-file'></span> Projects</a></li>
						<li><a href="newsfeed.php"><span class='glyphicon glyphicon-globe'></span> News Feed</a></li>
                        <li><?php echo "<a href=profile.php?student=" . $student . ">Profile</a>"; ?></li>
				        
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
                <h1>Forum Reply</h1>
                <img src="img/reply.svg" height="100px" width="100px" alt="replyicon" />
                  <h3>Please remember the guidelines and rules for posting posts, messages and replies.</h3>
              <?php
                echo "<br /><br /><form action='' name='replyform' onsubmit='return CheckReply()' method='POST'>" .
                    "<p id='repval'></p>" .
                    "<input type='hidden' name='fid' value=" . $fid . " />" .
                    "<textarea class='form-control' rows='5' name='replybody'></textarea>" . "<br /><br />" .
                    "<input type='submit' style='float:right;' class='button' name='send-reply' value='Reply' />" .
                    "</form>";
                ?>
               <?php
                
                include 'scripts/database-connection.php';
                        if (isset($_POST["send-reply"]))
                        {
                            $fid = $_POST["fid"];
                            $fid = mysqli_real_escape_string($dbcon, $fid);
                            
                            $replybody = $_POST["replybody"];
                            $replybody = mysqli_real_escape_string($dbcon, $replybody);
                            
                            $replysql = "INSERT INTO tbl_forum_replies (forumid, replybody, replystudent) VALUES ('$fid', '$replybody', '$student')";

                            if(mysqli_query($dbcon, $replysql))
                            {
                                header("Location: newsfeed.php");
                                
                                mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student just joined in a forum discussion')");
                                
                                mysqli_query($dbcon, "UPDATE tbl_student SET engagement = engagement + 2 WHERE student = '$student'");
                            }
                            else
                            {
                                echo mysqli_error($dbcon);
                            }
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