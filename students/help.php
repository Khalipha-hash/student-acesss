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
    <title>Help</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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
					<!-- <a href="../index.php" class="navbar-brand"> Izeo </a> -->
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
        
        <div class="container text-center">
            <div id="requests-section">
                <h1>Help</h1><br />
                <img src=img/confused.svg height='100' width='100' class='img-responsive center-block' alt='confused_face'/> <br /><br />
                <div class="row">
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#timeline" title="Timeline" class="help-button"><span class="glyphicon glyphicon-transfer"></span> Timeline</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#workroom" title="Work Room" class="help-button"><span class="glyphicon glyphicon-book"></span> Work Room</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#dropbox" title="Dropbox" class="help-button"><span class="glyphicon glyphicon-file"></span> Project</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#explore" title="Explore" class="help-button"><span class="glyphicon glyphicon-globe"></span> News Feed </button>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#profile" title="Profile" class="help-button"><span class="glyphicon glyphicon-user"></span> Profile</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#friendreq" title="Friend Requests" class="help-button"><span class="glyphicon glyphicon-plus"></span> Requests</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#messages" title="Messages" class="help-button"><span class="glyphicon glyphicon-envelope"></span> Messages</button>
                    </div>
                    <div class="col-sm-3">
                    <button type="button" data-toggle="modal" data-target="#settings" title="Settings" class="help-button"><span class="glyphicon glyphicon-cog"></span> Settings</button>
                    </div>
                </div>
            </div> 
        </div> <br /><br />
        
          
            <div id="workroom" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Workroom</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The workroom is where you can view assignments, homework and other files that students have shared. This is the place where
                            alot of group work will take place, in which you will have to upload files. You can also download files from students who have shared
                            their work.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="timeline" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Timeline</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The timeline review allows you to view your friends posts over a period of time. Keep in mind that posts which have been posted on a friend's page will also appear in on the timeline. You can search for
                        friends posts by searching keywords of their posts or simply by searching friends or other student's names.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="dropbox" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Project</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">Dropbox is where you will be able to upload assignment submissions and view assignment feedback from your submissions. You can
                            also view your progress on assignments visually within the chart.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="explore" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">News Feed</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The explore page is where you can view various content involving the school and students. You can view the news around your school,
                            create and browse through forum dicussions and also find new friends to connect with.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="profile" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Profile</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The profile page is your own unique page where all your content is displayed for other students to view. Your details, posts, engagement rating,
                            shared files and photos can be seen by other students. You can also view other students profiles by searching their names or typing their usernames.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="friendreq" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Friend Requests</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The friend request page is where you can view all your friend requests (students who want to be you friend). You can choose to accept or decline them.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="messages" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Messages</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The messages page is where you can view all the messages that have been sent to you by other students or by teachers.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <div id="settings" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Settings</h4>
                        </div>
                        <div class="modal-body">
                        <p class="help">The settings page allows you to change your account details, such as your bio, profile picture and password settings.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
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