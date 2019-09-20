<!DOCTYPE html>
<html lang="en">
<head>
    <title>Izeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
    <link rel="icon" href="img/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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
                        <a href="index.php" class="navbar-brand"> <img src="img/logo.png" width="90" class="logo-img"/> </a>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon-info-sign"> About</span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon-th"> Features</span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon-earphone"> Contact</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

        <section>
        
            <div id="about" class="section">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>About Izeo</h1>
                        <p>Izeo is a social online learning environment where students can interact with other students, share projects, as well as complete projects as groups.</p>
                        <p>Izeo enables this by integrating social media elements within personal learning into a social learning environment to effectively promote and enchance learning. It is completely free and open source.</p>

                        <a href="signup.php"><button class="button">Register Now</button></a>
                        <br /><br />
                        <p>Already have an Izeo account?</p>
                        <a href="login.php"><button class="button">Login</button></a>
                    </div>

                    <div class="col-sm-6">
                      
                    </div>
                </div>
            </div>

            <div id="features" class="section">
                <h1>Features</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <span class="glyphicon glyphicon-wrench"></span>
                        <h4><strong>Admin Assistance</strong></h4>
                        <p>Izeo's Admin features enables the admin to add, edit or delete students projects and profiles.</p>
                    </div>
                    <div class="col-sm-6">
                        <span class="glyphicon glyphicon-user"></span>
                        <h4><strong>Student Profile</strong></h4>
                        <p>Izeo includes integrated social media features within a personal/social environment to enhance collaborative working environmen. 
                        Students can share projects with other students, add friends from requests and join in discussion groups.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <h4><strong>Messaging</strong></h4>
                        <p>Students have the ability to send messages to friends. Students can also send messages to Admin if assistance is needed regarding any issues with their account.</p>
                    </div>
                    <div class="col-sm-6">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <h4><strong>Project Tasks</strong></h4>
                        <p>Students can upload projects, complete tasks and work collobaoratively with other friends on the same projects.</p>
                    </div>
                </div>
            </div>
        </section>
		<footer>
            <i><img src="img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center" style="color:black;">&copy; <h9 style="color:black;"><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
	</body>
</html>