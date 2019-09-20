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
    <title>Settings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-account-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/password-validation.js"></script>
    <style>
        body
        {
            background: url(../../img/splash.jpg) no-repeat center center fixed;
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
                        <li><a href="../timeline.php"><span class='glyphicon glyphicon-home'></span> Izeo</a></li>
                        <li><a href="../timeline.php"><span class='glyphicon glyphicon-transfer'></span> Timeline</a></li>
						<li><a href="../workroom.php"><span class='glyphicon glyphicon-book'></span> Work Room</a></li>
                        <li><a href="../project.php"><span class='glyphicon glyphicon-file'></span> Projects</a></li>
						<li><a href="../newsfeed.php"><span class='glyphicon glyphicon-globe'></span> News Feed</a></li>
                        <li><?php echo "<a href=../profile.php?student=" . $srow["student"] . "><span class='glyphicon glyphicon-user'></span> Profile</a>"; ?></li>
				        
					</ul>
					<ul class="nav navbar-nav navbar-right">
                      <li><a href="../friend-requests.php"><span class="glyphicon glyphicon-plus"></span> Friend Requests(<?php echo $requestcount; ?>)</a></li>
                        <li><a href="../messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages(<?php echo $messagecount; ?>)</a></li>
                          <li><a href="account.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><?php echo "<a href='scripts/logout-student.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>"; ?></li>
					</ul>
				</div>
			</div>
		</nav>
        
        <div class="container">
            <div id="settings-section"><br />
                <h1>Change Password</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <div id="menu">
                                <ul>
                                    <li><a href="account.php">Overview</a></li>
                                    <li><a href="change-bio.php">Change Bio</a></li>
                                    <li><a href="change-image.php">Change Profile Pic</a></li>
                                    <li><a href="change-password.php">Change Password</a></li>
                                    <li><a href="../help.php">Help</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="well">
                            <div class="settings">
                                <h2 id="white" style="text-decoration:underline;"><?php echo $srow["firstname"]; ?>'s Password</h2>
                                    <form action="scripts/update-student-password.php" name="newpassform" onsubmit="return CheckPasswordStudent()" method="POST">
                                    <div class="form-group">
                                    <input type="hidden" class="form-control" name="student" value="<?php echo $_SESSION["student"]; ?>">
                                    </div>

                                    <div class="form-group">
                                    <label for="oldpassword">Old Password</label>
                                    <input type="password" class="form-control" name="oldpass" placeholder="Old Password">
                                    <p id="opval" style="color: #FFFFFF;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" name="newpass" placeholder="New Password">
                                    <p id="npval" style="color: #FFFFFF;"></p>
                                    </div>
                                        
                                     <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
                                    <p id="cpval" style="color: #FFFFFF;"></p>
                                    <p id="pmval" style="color: #FFFFFF;"></p>
                                    </div>
                                        
                                    <br />
                                    <button type="submit" class="update-button"><span class="glyphicon glyphicon-log-in"></span> Update</button>
                                    </form>
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        <footer>
            <i><img src="../../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center" style="color:black;">&copy; <h9 style="color:black;"><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>