<?php
session_start();
include 'scripts/database-connection.php';


//require ('start.php');

//list($accessToken) = $webAuth->finish($_GET);


header('Location: ini.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DropBox</title>
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
						<li><a href="#"><span class='glyphicon glyphicon-book'></span> Work Room</a></li>
                        <li><a href=""><span class='glyphicon glyphicon-paperclip'></span> DropBox</a></li>
						<li><a href="explore.php"><span class='glyphicon glyphicon-globe'></span> Explore</a></li>
                       
				        
					</ul>
					<ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="settings/account.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><?php echo "<a href='scripts/logout-student.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>"; ?></li>
					</ul>
				</div>
			</div>
		</nav>
        
        <div class="container text-center">
            <div id="requests-section">
                <h1>DropBox FINISH!</h1>
         
                
            </div>
        </div>
                
        <footer>
            <p>| Terms & Conditions | Privacy | Mobile App |</p>
            <p>Developed by Jeremy Olu</p>
            <p>N0589165</p>
        </footer>
        
	</body>
</html>