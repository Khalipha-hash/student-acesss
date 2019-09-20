<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["student"]))
{
	header("Location: login.php");
}

$student = $_SESSION["student"];


$sql = "SELECT * FROM tbl_student WHERE student = '$student'";
$sresult = mysqli_query($dbcon, $sql);
$srow = mysqli_fetch_assoc($sresult);

$sqlmessage = "SELECT * FROM inbox_messages WHERE to_student = '$student'";
$mresult = mysqli_query($dbcon, $sqlmessage);
$messagecount = mysqli_num_rows($mresult);

$sqlrequests = "SELECT * FROM friends_requests WHERE to_student = '$student'";
$reqresult = mysqli_query($dbcon, $sqlrequests);
$requestcount = mysqli_num_rows($reqresult);

$sqlfriends = "SELECT * FROM tbl_student WHERE last_activity >= CURDATE() AND student <> '$student'";
$friendsresult = mysqli_query($dbcon, $sqlfriends);
$onlinefriends = mysqli_num_rows($friendsresult);

$sqlchat = "SELECT * FROM tbl_student JOIN tbl_chat ON tbl_student.student = tbl_chat.username";
$chathistory = mysqli_query($dbcon, $sqlchat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30"/>
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/post-validation.js"></script>
    
    <script>
        function SendChatMessage()
        {
            if (document.chatform.chat.value == "")
            {
                alert("haha");
                return false;
            }
        }
    </script>
     <style>
        body
        {
            background: url(../img/splash.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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
                        <li><a href="project.php"><span class='glyphicon glyphicon-file'></span> Project</a></li>
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
        
        <div class="container">
            <div id="timeline-section">
                
                 <div id="chat-section">
                    <h1>Chat</h1>
                    <p>Chat with friends and other students</p>
                    <div class="row">
                        <div class="col-sm-3">
                            <h2>Active Students (<?php echo $onlinefriends; ?>)</h2>
                            <div id="status">
                                <?php
                                    while($onlinerow = mysqli_fetch_assoc($friendsresult))
                                    {
                                        echo
                                        "<h3 style='text-align:center;'><strong><a href=profile.php?student=". $onlinerow["student"] . " title='signed in today'> " . $onlinerow["firstname"] . " " . $onlinerow["surname"] . "</strong></h3>" .
                                        "<img src=../profileimg/" . $onlinerow["profileimg"] . " class='img-circle center-block' width=100 height=100 alt='profile_pic'></a>" .
                                        "<hr />";    
                                    }
                                ?>
                            </div>

                        </div>

                        <div class="col-sm-9">
                            <h2>Chat Box</h2>
                             <div id="chatlogs">
                                <?php

                                while($chatrow = mysqli_fetch_assoc($chathistory))
                                {
                                echo
                                "<div class='chat-user'><h3><b>" . $chatrow["firstname"] . "</b></h3></div>" .
                                "<div class='chat-img'><img src=../profileimg/" . $chatrow["profileimg"] . " class='img-circle' width=100 height=100 alt='profile_pic'></div>" .
                                "<div class='chat-message'><p>" . $chatrow["message"] . "</p></div>" .
                                "<div class='chat-date'><p>" . $chatrow["datesent"] . "</p></div>"; 
                                }

                                ?>
                     
                            </div>
                     <br />
                    <form action="scripts/send-chat.php" name="chatform" onsubmit="return SendChatMessage()" method="POST">
                        <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION["student"]; ?>">
                        <div class="form-group">
                        <textarea class="form-control" rows="3" name="chat"></textarea>
                        </div>
                        <input type="submit" style="float:left;" class="button" value="Send" name="post">
                    </form>

                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
        
        <footer>
            <i><img src="../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center" style="color:black;">&copy; <h9 style="color:black;"><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>