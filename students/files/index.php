<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learnbe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="css/main-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script>
        setTimeout('document.getElementById("span1").innerHTML = "social learning environment";', 2000);
        setTimeout('document.getElementById("span2").innerHTML = "virtual learning platform";', 4000);
        setTimeout('document.getElementById("span3").innerHTML = "social online learning experience";', 6000);
        setTimeout('document.getElementById("span4").innerHTML = "interactive online portal";', 8000);
        setTimeout('document.getElementById("span5").innerHTML = "social learning application";', 10000);
        setTimeout('document.getElementById("span6").innerHTML = "advancement to e-learning";', 12000);
    </script>
    
</head>
    <body id="#home">
        
        <nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						MENU                        
					</button>
					<a href="index.php" class="navbar-brand"> learnbe </a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<header>
            <div class="row">
                <div class="col-sm-4">
                    <h3 id="span1"></h3>
                </div>
                <div class="col-sm-4">
                    <h3 id="span2"></h3>
                </div>
                <div class="col-sm-4">
                    <h3 id="span3"></h3>
                </div>
            </div>
            <h1><b>learnbe</b></h1>
            <div class="row">
                <div class="col-sm-4">
                    <h3 id="span4"></h3>
                </div>
                <div class="col-sm-4">
                    <h3 id="span5"></h3>
                </div>
                <div class="col-sm-4">
                    <h3 id="span6"></h3>
                </div>
            </div>
		</header>
        
        <section>
        
            <div id="about" class="section">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>About</h1>
                        <p>Learnbe is a social online learning environment where students can interact with other students, share learning and educational content, as well as complete homework tasks and assignments, allowing teachers and parents to monitor and analyse the development of students.</p>
                        <p>Learnbe enables this by integrating social media elements within personal learning into a social learning environment to effectively promote and enchance learning. It is completely free and open source.</p>

                        <button class="button">Register Now</button>
                        <br /><br />
                        <p>Already have an learnbe account?</p>
                        <a href="login.php"><button class="button">Login</button></a>
                    </div>

                    <div class="col-sm-6">
                      
                    </div>
                </div>
            </div>

            <div id="features" class="section">
                <h1>Features</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-wrench"></span>
                        <h4><strong>Admin Assistance</strong></h4>
                        <p>Learnbe enables school/college admin/IT support technicans to control the whole web application for ease of use and support if needed. Admin/ IT support staff can add, edit or delete teachers, students, parents to the system as well as making a series of changes to suit the needs and requirments of users within the school/college.</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-cog"></span>
                        <h4><strong>Staff Control</strong></h4>
                        <p>Learnbe allows staff/teachers to monitor students activities while using the application. Homework and assignments can be assigned online in which teachers can monitor students work, analyse development and make judgements based on the information gathered. </p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                        <h4><strong>Parents Monitoring</strong></h4>
                        <p>Learnbe gives parents the ability to monitor their child's profile and homework set by teachers. Parents can also contact teachers directly from the application for enquiries, monthly student reports and parents meeting conferences.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-user"></span>
                        <h4><strong>Student Profile</strong></h4>
                        <p>Learnbe includes integrated social media features within a personal/social environment to enhance student learning. Students can share content with other students, add friends from requests, join in discussion groups, assist other students with shared homework assignments. Students can also view school resources (books, events, assignments).</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <h4><strong>Messaging</strong></h4>
                        <p>Students have the ability to send messages, assignments and other content to friends. Students can also send messages to teachers if assistance is needed regarding assignments or problems with their account. Parents can also message teachers for enquires.</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <h4><strong>Assignment Tasks</strong></h4>
                        <p>Students can print off assignment and homework tasks, complete tasks and upload the assignments and homework back to the teacher. Students can view content set by teachers e.g. research, homework, books.</p>
                    </div>
                </div>
            </div>
            
            <div id="contact" class="section">
                    <div class="row"> 
                        <div class="col-sm-6">
                            <h1 id="c-heading">Contact</h1>
                            <h3 id="c-heading">Have any queries or need assistance with Learbe?</h3>
                            <form action="scripts/login-user.php" name="contactform" onsubmit="return ValidateLogin()" method="POST">
                            <div class="form-group">
                            <label for="username">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            <p id="nval"></p>
                            </div>
                            <div class="form-group">
                            <label for="sel">Select Topic:</label>
                            <select class="form-control" name="select">
                            <option id="general">General Inquires </option>
                            <option id="complaint">Complaint</option>
                            <option id="assistance">Assistance</option>
                            <option id="other">Other</option>
                            </select>
                            <p id="oval"></p>
                            </div>
                            <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            <p id="eval"></p>
                            </div>
                            <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" rows="5" name="message" placeholder="Enter Message"></textarea>
                            <p id="mval"></p>
                            </div>
                            <button type="submit" class="button"><span class="glyphicon glyphicon-log-in"></span> Send</button>
                            </form>
                        </div>
                        
                        <div class="col-sm-6">
                            <h1 id="c-heading">FAQ</h1>
                            <h3 id="c-heading">Frequently asked questions and answers</h3>
					        <button type="button" class="faq-button" data-toggle="collapse" data-target="#faq1">I want to use learnbe for my school/college <span class="glyphicon glyphicon-menu-down"></span></button>
                            <br />
                            <div id="faq1" class="collapse">
                                <p>If you would like to start using learnbe for your school/college, please contact learbe using the contact form on assistance on how to use this. Alternatively you can download the source code, integrate it into your internal network and start using straight away.</p> 
                            </div>
                            
                            <button type="button" class="faq-button" data-toggle="collapse" data-target="#faq2">How much does learnbe cost? <span class="glyphicon glyphicon-menu-down"></span></button>
                            <br />
                            <div id="faq2" class="collapse">
                                <p>learnbe is completely free to use at no cost. There is no basic or pro versions of the application. The application is developed into one which has all the features required.</p>
                            </div>
                            
                            <button type="button" class="faq-button" data-toggle="collapse" data-target="#faq3">I have a problem with my learnbe application <span class="glyphicon glyphicon-menu-down"></span></button>
                            <br />
                            <div id="faq3" class="collapse">
                                <p>If you are an Admin/IT support or staff/teacher experiencing problems with the application, please contact learnbe using the form urgently.</p>
                            </div>
                            
                            <button type="button" class="faq-button" data-toggle="collapse" data-target="#faq4">Where do I login to my account? <span class="glyphicon glyphicon-menu-down"></span></button>
                            <br />
                            <div id="faq4" class="collapse">
                                <p>Login page can be accessed by clicking the login button at the top of the page. Alternatively you can login by clicking the your associated department. E.g admin, staff, students, parents.</p>
                            </div>
                            
                            <button type="button" class="faq-button" data-toggle="collapse" data-target="#faq5">I want to make a complaint <span class="glyphicon glyphicon-menu-down"></span></button>
                            <br />
                            <div id="faq5" class="collapse">
                                <p>Please use the contact form to forward any complaints or issues you have regarding the learbe system.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
		<footer>
            <div class="row">
				<div class="col-sm-3">
					<ul>
						<h4>Admin</h4>
						<li><a href="admin/login.php">Admin Login</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">News & Updates</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul>
						<h4>Staff</h4>
						<li><a href="staff/login.php">Staff Login</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Cookies & Privacy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
                <div class="col-sm-3">
					<ul>
						<h4>Students</h4>
						<li><a href="#">Student Login</a></li>
						<li><a href="#">Complaints</a></li>
						<li><a href="#">Mobile App</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul>
						<h4>Parents</h4>
						<li><a href="#">Parents Login</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">School/College Look-Up</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div> 
			</div>
            <br /><br />
            <p>Developed by Jeremy Olu</p>
            <p>N0589165</p>
		</footer>
	</body>
</html>