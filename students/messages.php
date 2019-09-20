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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Messages </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/login-validation.js"></script>
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
        
        <div class="container">
            <div id="messages-section">
                <h1>Messages</h1>
                <?php
                    // messages:
                
                    include 'scripts/database-connection.php';
                
                    $sqlmessage = "SELECT * FROM inbox_messages WHERE to_student = '$student' ORDER BY datesent DESC";
                    $mresult = mysqli_query($dbcon, $sqlmessage);

                    if ($mresult = mysqli_query($dbcon, $sqlmessage))
                    {

                    $messagecount = mysqli_num_rows($mresult);

                    if ($messagecount == 0)
                    {
                        echo "<h3 style='text-align: center;'>" . $srow["firstname"] . ", you have no new messages at the moment." . "</h3>";
                        // echo "<img src=img/sad.svg height='200' width='200' class='img-responsive center-block' alt='sad_face' />";
                    }
                    else
                    {
                        echo "<h3 style='text-align: center;'>" . $srow["firstname"] . ", you have (" . $messagecount .") messages in your inbox. </h3><br />";
                        //echo "<br /><img src=img/excited.svg height='200' width='200' class='img-responsive center-block' alt='excited_face'/><br /><br />";

                        while ($mrow = mysqli_fetch_assoc($mresult))
                        {
                            $mid = $mrow["id"];
                            
                            // reply message
                            if (isset($_POST["reply"]))
                            {
                                header("Location: send-message.php?student=" . $mrow["from_student"] . "");
                            }

                            echo
                                "<h3>From &#8628; <a href=profile.php?student=" . $mrow["from_student"] . ">" . $mrow["from_student"] . "</a>" . "</h3>" .
                                "<hr />" .
                                "<p style='text-align: center;'>" . $mrow["title"] . "</p>" .
                                "<div class='well'>" .
                                "<p>" . $mrow["message"] . "</p>" .
                                "</div>" .
                                "<form action='messages.php' method='POST'>" .
                                    "<input type='hidden' name='id' value=" . $mid . "/>" .
                                    "<input type='submit' class='button' name='reply' value='Reply'/>" .
                                    "<input type='submit' class='button' name='delete' value='Delete'/>" .
                                    "<br /><p style='text-align:center;'><strong>" . $mrow["datesent"] . "</strong></p>" .
                                "</form>";
                               
                        }
                    }
                        
                    }
                ?>
                
                <?php
                
                // reply message
                
             
                // delete message:
                
                if (isset($_POST['delete'])) 
                {
                    $deleteinbox = mysqli_query($dbcon, "DELETE FROM inbox_messages WHERE id = '$mid'");
                    header("Location: messages.php");
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