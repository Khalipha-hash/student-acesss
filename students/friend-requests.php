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

$friends_list = $get_friends = $srow["friends"];
$friends_list_friend = $get_friends = $srow["friends"];

$sqlq = "SELECT * FROM friends_requests JOIN tbl_student WHERE friends_requests.to_student = '$student'";
$fqresult = mysqli_query($dbcon, $sqlq);
$grow = mysqli_fetch_assoc($fqresult);

$from_student = $grow["from_student"];
$to_student = $grow["to_student"];

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
					<!-- <a href="timeline.php" class="navbar-brand"> learnbe </a> -->
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
                        <li><a href="timeline.php"><span class='glyphicon glyphicon-home'></span> Izeo</a></li>
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
            <div id="requests-section">
                <h1>Friend Requests</h1>
              <?php
                    include 'scripts/database-connection.php';
                    $requests = "SELECT * FROM friends_requests JOIN tbl_student WHERE friends_requests.to_student = '$student' AND tbl_student.student = '$from_student'";
                    if ($result = mysqli_query($dbcon, $requests))
                      {
                      
                      $rowcount = mysqli_num_rows($result);
                        
                        if ($rowcount == 0)
                        {
                            echo "<h3>" . $srow["firstname"] . ", you have no friend requests at the moment." . "</h3>";
                            echo "<br /><br /><img src=img/sad.svg height='200' width='200' class='img-responsive center-block' alt='sad_face'/><br /><br />";
                    
                        }
                        else
                        {
                            while ($reqrow = mysqli_fetch_assoc($result))
                            {
                                echo 
                                "<div>" .
                                "<h3>" . $reqrow["from_student"] . "</h3>" .
                                "<img src=../profileimg/" . $reqrow["profileimg"] . " class='img-circle' width=120 height=120 alt='Profile Picture'><br /><br />" .
                                "<h4>" . $reqrow["firstname"] . " " . $reqrow["surname"] . "</h4>" .
                                "<p>" . $reqrow["firstname"] . " in year " . $reqrow["yeargroup"] . " wants to be your friend!" . "</p>" .
                                    
                                "<form action='friend-requests.php' method='POST'>" .
                                    "<input type='submit' class='button' name=" . 'addfriend' . $reqrow['from_student'] . " value='Accept'/>" .
                                    "<input type='submit' class='button' name=" . 'declinefriend' . $reqrow['from_student'] . " value='Decline'/>" .
                                "</form>" .
                                "</div>";
                            }
                        }
                      }
                ?>
                
            </div>
            
                <?php
                    include 'scripts/database-connection.php';
            
                    // accepting student friend requests
                    if (isset($_POST['addfriend' . $from_student])) 
                    {   
                        // add new friends to list
                        
                        $friends_array = explode("," , $friends_list);
                        $friends_count = count($friends_array);
                        
                        // add to friends from list
                        
                        $friends_array_friend = explode("," , $friends_list_friend);
                        $friends_count_friend = count($friends_array_friend);
                        
                        // update friends query
                        
                        $add_friend_query = mysqli_query($dbcon, "UPDATE tbl_student SET friends=CONCAT(friends, ',' '$from_student') WHERE student='$student'");

                        $add_friend_query = mysqli_query($dbcon, "UPDATE tbl_student SET friends=CONCAT(friends, ',' '$to_student') WHERE student='$from_student'");
                        
                        $removefq = mysqli_query($dbcon, "DELETE FROM friends_requests WHERE from_student = '$from_student' AND to_student = '$to_student'");
                        
                        mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student and $to_student are now friends')");
                        
                         echo "<br><div class='alert alert-success'><h3>You have accepted a friend request from " . $from_student . "</h3></div>";
                        
                    }
            
                    // declining student friend requests
                    if (isset($_POST['declinefriend' . $from_student])) 
                    {
                        $ignoresql = "DELETE FROM friends_requests WHERE from_student = '$from_student' AND to_student = '$to_student'";
                        
                        if ($result = mysqli_query($dbcon, $ignoresql))
                        {
                            header( "refresh:3;url=friend-requests.php" );
                            echo "<h3>You have declined a friend request from " . $from_student . "</h3>";
                        }
                        else
                        {
                            echo "Opps, something has gone wrong. Unable to perform your request.";
                        }
                    }
                ?>
            
                
        </div>
                
        <footer>
            <i><img src="../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center" style="color:black;">&copy; <h9 style="color:black;"><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>