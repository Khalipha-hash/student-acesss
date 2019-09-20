<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/admin-style.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../students/settings/css/student-account-style.css">

    
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
            position: fixed;
        }
    </style>
    
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
                        <a href="../index.php" class="navbar-brand"> <img src="../img/logo.png" width="90" class="logo-img"/> </a>
                        <li><a href="../index.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
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

        <div class="container">
            <div id="settings-section"><br />
                  <img src="../img/logo.png"   style=" display: block; margin: 0 auto; ">
                  <br><br><br>
                    <div class="col-lg-12">
                        <div class="well">
                            <div class="settings">
                                <h2 id="white" style="text-decoration:underline; text-align: center;"> Student </h2>
                                    <form action="scripts/login-student.php" name="loginform" onsubmit="return ValidateLogin()" method="POST">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="student" placeholder="Student">
                                        <p id="uval"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <p id="pval"></p>
                                    </div>
                                    <button type="submit" class="update-button"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                                    </form>
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        
        <footer>
            <i><img src="../img/logo.png" width="80"></i>
            <span class="copyright" align-text = "center">&copy; <h9><strong> 2018. IMY220 Project.</strong></h9></span>
        </footer>
        
	</body>
</html>