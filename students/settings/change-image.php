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
    <title>Settings Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-account-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					<!-- <a href="../index.php" class="navbar-brand"> learnbe </a> -->
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
            <h1>Change Profile Pic</h1>
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
                                <h2 id="white" style="text-decoration:underline;"><?php echo $srow["firstname"]; ?>'s Pic</h2>
                                <div class="row" style="text-align:center;">
                                        <?php echo "<img src=../../profileimg/" . $srow["profileimg"] . " class='img-circle' width=120 height=120 alt='Profile Picture'>"; ?>
                                        <br /><br />
                                        <button type="button" class="update-button" data-toggle="modal" data-target="#myModal">Upload Image</button>
                                            <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Upload Profile Image</h4>
                                            </div>
                                            <div class="modal-body">

                                            <form action="scripts/upload-student-img.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                            <input type="hidden" class="form-control" name="student" value="<?php echo $_SESSION["student"]; ?>">
                                            </div>
                                            <img src="icons/user.svg" class="img-circle" alt="user" width="120px" height="120px">
                                            <div class="form-group">
                                            <input type="file" name="img_file" id="fileToUpload">
                                            <input type="submit" value="Upload Image" name="upload" class="update-button">
                                            </div>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>

                                            </div>
                                            </div>
                                        <h3 id="white">Bio</h3>
                                        <p><strong><?php echo $srow["bio"]; ?></strong></p>
                                </div>
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