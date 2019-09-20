<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["student"]))
{
	header("Location: login.php");
}

$student = $_SESSION["student"];

$sid = $_GET["student"];

if (isset($_POST["sendmsg"]))
{
    header("Location: send-message.php?student=" . $sid . "");
}

$sql = "SELECT * FROM tbl_student WHERE student = '$sid'";
$sresult = mysqli_query($dbcon, $sql);
$srow = mysqli_fetch_assoc($sresult);

$friends_list = $get_friends = $srow["friends"];
$friends_array = explode(",",$friends_list);
$friends_count = count($friends_array);

$sqlposts = "SELECT * FROM tbl_student JOIN posts ON tbl_student.student = posts.student WHERE tbl_student.student = '$sid' ORDER BY dateposted DESC";
$presult = mysqli_query($dbcon, $sqlposts);

$sqlphoto = "SELECT * FROM tbl_student_photos WHERE student = '$sid' ORDER BY dateuploaded DESC";
$photresult = mysqli_query($dbcon, $sqlphoto);

$sqlshare = "SELECT * FROM tbl_student JOIN tbl_shared_files ON tbl_student.student = tbl_shared_files.student WHERE tbl_student.student = '$sid' ORDER BY dateshared DESC";
$shareresult = mysqli_query($dbcon, $sqlshare);
$sharecount = mysqli_num_rows($shareresult);

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
    <script src="js/post-validation.js"></script>
    <script src="js/utilities.js"></script>
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
            <div id="profile-section">
                <div id="search-bar">
                    <form action="friends-search.php" method="GET">
                        <input type="text" style="float:right;" name="query" placeholder="Search for friends.." />
                    </form>
                </div>
                
                <br /><br />
                
                <div id="media-bar">
                    <button type="button" data-toggle="modal" data-target="#forum" title="Post a discussion" class="button"><span class="glyphicon glyphicon-comment"></span> Forum </button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <a href="chat.php"><button type="button" title="Chat with friends" class="button"><span class="glyphicon glyphicon-transfer"></span> Chat</button></a>
                </div>
                <br />
                <p id="postval"></p>
                <h2>Engagement Rating</h2>
                 <div class="progress">
                <div class="progress-bar" role="progressbar" title="<?php echo $srow["engagement"]; ?>%" aria-valuenow="<?php echo $srow["engagement"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $srow["engagement"]; ?>%; background-color: #25B99A;">
                </div>
                </div>
                
            <!-- Forum Popup -->
            <div id="forum" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Start Discussion</h4>
                        </div>
                        <div class="modal-body">
                            <form action="scripts/post-forum.php" name="forumform" onsubmit="return CheckForum()" method="POST">
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="student" value="<?php echo $_SESSION["student"]; ?>">
                                </div>
                                <img src="img/reply.svg" class="img-circle" alt="doc" width="120px" height="120px">
                                <div class="form-group">
                                    <label for="subject">Select Subject</label>
                                    <select class="form-control" name="subject" id="subject">
                                        <option value="General">General</option>
                                        <option value="FAQ">FAQ</option>
                                        <option value="CodeNewBie">CodeNewBie</option>
                                        <option value="JavaScript">JavaScript</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="jQuery">PHP</option>
                                        <option value="Python">Python</option>
                                        <option value="C++">C++</option>
                                        <option value="Data Science">Data Science</option>
                                    </select>
                                </div>                        
                                <div class="form-group">
                                    <label for="title">Topic:</label>
                                    <input type="text" class="form-control" name="title" placeholder="Question Title" id="title">
                                </div>
                                <p id="topval"></p>
                                <div class="form-group">
                                    <label for="body">Discussion:</label>
                                       <textarea class="form-control" rows="2" name="body" id="body" placeholder="Start a discussion <?php echo $srow["firstname"]; ?>!"></textarea>
                                </div>
                                <p id="disval"></p>
                                 <input type="submit" class="button" value="Post" name="post">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
                
                <div id="action-bar">
                     <?php
                        include 'scripts/database-connection.php';
                        if (isset($_POST["addfriend"]))
                        {

                            $from_student = $student = $_SESSION["student"];
                            $to_student = $sid = $_GET["student"];

                            if ($from_student == $to_student)
                            {
                                echo "<div id='danger'><span class='glyphicon glyphicon-warning-sign'></span><br /> You cannot send yourself a friend request.</div>";
                            }
                            else
                            {
                                
                                
                                $sqla = "INSERT INTO friends_requests (from_student, to_student) VALUES ('$from_student', '$to_student')";

                                if(mysqli_query($dbcon, $sqla))
                                {
                                    echo "<div id='success'><span class='glyphicon glyphicon-thumbs-up'></span><strong><p>Friend request has been sent.</p></strong></div>";
                                    
                                    mysqli_query($dbcon, "INSERT INTO activities (student, activity) VALUES ('$student', '$student just sent a friend request to me')");
                                }
                                else
                                {
                                    echo "<div id='danger'><strong>Friend request has not been sent. Please try again.</strong></div>";
                                }
                                
                            }
                        }
                        else
                        {
                            // no action
                        }
                    
                    ?>
                </div>
                
                
                
                <div class="row">
                    <div class="col-sm-3">
                        <div id="profile">
                            <h2><?php echo $srow["student"]; ?></h2>
                            <?php echo "<img src=../profileimg/" . $srow["profileimg"] . " class='img-circle' width=120 height=120 alt='Profile Picture'>"; ?> <br />
                            <h4><?php echo $srow["firstname"]; ?> <?php echo $srow["surname"]; ?></h4>
                            <form action="" method="POST">
                                <input type="submit" class="addBtn" name="addfriend" value="add friend" />
                                <input type="submit" class="addBtn" name="sendmsg" value="send message" />
                            </form>
                            <h3>About Me</h3>
                            <h4><?php echo $srow["bio"]; ?></h4>
                            <div id="bottom-profile">
                            <hr />
                            <h4>FRIENDS: <?php echo $friends_count; ?></h4>
                            <strong><?php echo $srow["friends"]; ?></strong>
                            <hr />
                            </div>
                        </div>
                    </div>
                    
                <div class="col-sm-7">
                    <div class="row">
                        <?php
                        while($prow = mysqli_fetch_assoc($presult))
                        {
                            echo 
                            "<div class='col-sm-12'>" .
                            "<div class='well-profile'>" .
                            "<h3>" . $prow["student"] . " &#8594; " . $prow["postto"] . "</h3>" .
                            "<h4>" . $prow["post"] . "</h4>" .
                            "</div>" .
                             "<p id='dateposted'>" . $prow["dateposted"] . "</p>" . "<br />" . 
                            "</div>";
                        }
                        
                        ?>  
                    </div>
                </div>
                    
                <div class="col-sm-2">
                    <h2>Shared Files</h2>
                    <h4><?php echo $sharecount; ?> files shared</h4>
                    <hr />
                    <?php
                    while($sharerow = mysqli_fetch_assoc($shareresult))
                         {
                            echo
                            "<h5>" . $sharerow["description"] . "</h5>" .
                            "<a href=files/". $sharerow["filename"] . ">" . $sharerow["filename"] . "</a>" .
                            "<hr />";    
                         }
                        ?>
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