<?php
session_start();
include 'scripts/database-connection.php';

if(!isset($_SESSION["username"]))
{
	header("Location: login.php");
}

$username = $_SESSION["username"];

$sql = "SELECT * FROM tbl_admin WHERE admin = '$username'";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Start</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/admin-style.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/login-validation.js"></script>
    
</head>
    <body id="#home">
        
        <nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				        MENU                 
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <a href="index.php" class="navbar-brand"> <img src="../img/logo.png" width="90" class="logo-img"/> </a>
						<!-- <li><a href="admin-dashboard.php">Dashboard</a></li> -->
						<!-- <li><a href="timeline.php"><span class='glyphicon glyphicon-transfer'></span> Timeline</a></li>
                        <li><a href="workroom.php"><span class='glyphicon glyphicon-book'></span> Work Room</a></li>
                        <li><a href="project.php"><span class='glyphicon glyphicon-file'></span> Projects</a></li>
                        <li><a href="newsfeed.php"><span class='glyphicon glyphicon-globe'></span> News Feed</a></li> -->
					</ul>
                    
					<ul class="nav navbar-nav navbar-right">
                        <li><a href=""> Welcome <?php echo $_SESSION["username"]; ?></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
						<li><?php echo "<a href='scripts/logout-admin.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>"; ?></li>
					</ul>
				</div>
			</div>
		</nav>
        
        <div class="container">
            
            <div id="admin-section">
                <header>
                    <h1>Admin Start Menu</h1>
                </header>
            
            <div id="manage-section">
            <div class="row">
                <div class="col-sm-6">
                    <a href="admin-dashboard.php">
                        <div class="well">
                            <h1 class="well-heading">Users</h1>
                            <img src="icons/admin.svg" height="72px" width="72px" alt="admin-icon" />
                            <p>View and manage users</p>
                        </div>
                    </a>  
                </div>

                <div class="col-sm-6">
                    <a href="admin-dashboard.php">
                        <div class="well">
                            <h1 class="well-heading">Work Room Mangement</h1>
                            <img src="icons/staff.svg" height="72px" width="72px" alt="admin-icon" />
                            <p>View and manage projects</p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <a href="admin-dashboard.php">
                        <div class="well">
                            <h1 class="well-heading">News Feed</h1>
                            <img src="icons/students.svg" height="72px" width="72px" alt="admin-icon" />
                            <p>View and manage News Feed</p>
                        </div>
                    </a>
                </div>
                
            </div>
                </div>
            </div>
 
        </div> <!-- CONTAINER END -->
        
        <footer>
            <i><img src="../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center">&copy; <h9><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>