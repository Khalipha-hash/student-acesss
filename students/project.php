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

$sqlq = "SELECT * FROM friends_requests JOIN tbl_student WHERE friends_requests.to_student = '$student'";
$fqresult = mysqli_query($dbcon, $sqlq);
$grow = mysqli_fetch_assoc($fqresult);

$sqlmessage = "SELECT * FROM inbox_messages WHERE to_student = '$student'";
$mresult = mysqli_query($dbcon, $sqlmessage);
$messagecount = mysqli_num_rows($mresult);

$sqlrequests = "SELECT * FROM friends_requests WHERE to_student = '$student'";
$reqresult = mysqli_query($dbcon, $sqlrequests);
$requestcount = mysqli_num_rows($reqresult);

$sqlass = "SELECT * FROM assignments";
$assresult = mysqli_query($dbcon, $sqlass);

$sqlassup = "SELECT * FROM assignments_uploads WHERE student = '$student' ORDER BY submitdate DESC";
$assresult1 = mysqli_query($dbcon, $sqlassup);

$chartsql = "SELECT * FROM assignments_uploads WHERE student = '$student'";
$chartresult = mysqli_query($dbcon, $chartsql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/student-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/login-validation.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
            <div id="requests-section">
                <div id="search-bar">
                    <form action="assignments-search.php" method="GET">
                        <input type="text" style="float:right;" name="query" placeholder="Search projects..." />
                    </form>
                </div>
                <h1>Projects</h1>
                 
                <hr />
                
               
                </div>
                
                <h3>Upload Projects</h3>
                <p><?php echo $srow["firstname"] ?> upload your project. After upload you will be able to see project details below.</p>
                
                <?php
                    while($assrow = mysqli_fetch_assoc($assresult))
                    {
                        echo
                            "<a href='submission-uploads.php?asid=". $assrow["asid"] . "'><button class='button' style='width:150px;'><span class='glyphicon glyphicon-upload'></span> Upload</button></a>" .
                            "<br /><br />";
                    }
                ?>
              
                
                <div id="file" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Work</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" name="submitform" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="student" value="<?php echo $_SESSION["student"]; ?>">
                                </div>
                                <img src="icons/file.svg" class="img-circle" alt="doc" width="120px" height="120px">
                                <div class="form-group">
                                <input type="file" name="my_file" id="fileToUpload">
                                <input type="submit" class="button" value="Submit Work" name="submitwork">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
                
            </div>
            
            <hr />
            
            <div id="test">
                
                 <?php
                    while($assrow1 = mysqli_fetch_assoc($assresult1))
                    {
                        echo
                            "<ul class='list-group'>" .
                            "<strong><li class='list-group-item' style='text-align:center; background-color:#e6f2ff;'>Project Submission Receipt</strong></li>" .
                            "<li class='list-group-item'>Project Details: </li>" .
                            "<li class='list-group-item'>Filename - <a href=../submissions/". $assrow1["filename"] . ">" . $assrow1["filename"] . "</a></li>" .
                            "<li class='list-group-item'>Submitted: " . $assrow1["submitdate"] . "</li>".
                            "</ul>";
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