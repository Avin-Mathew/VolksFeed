<html>
<form name='login' method='POST' action='#'>
<body>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">

<?php
if(isset($_POST['log']))
{
if($_POST["log"]=='Submit')
{
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$use=$_POST['txt1'];
$pas=$_POST['psw'];
$email=$_POST['txt2'];
$sql = "INSERT INTO tbl1_login VALUES ( '$email', '$use', '$pas')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/home.php');
}
}
if($_POST["log"]=='Home')
{
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/user_home.php');
}
}
?> 
</center>
</form>
<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---start-login-script--->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/login.js"></script>
		<!---//End-login-script--->
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script>
		<!-----//768px-menu----->
	</head>
	<body>
		<!---start-wrap---->
		<!------start-768px-menu---->
			<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					
			</div>
		<!------start-768px-menu---->
			<!---start-header---->
			<center>
			<div>
				<div class="wrap">
				<div class="header-left">
					<div class="logo"><a href="http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/index.php">VolksFeed</a></div>
				</div>
				<div class="header">
					
				
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			</center>
			</div>
			<!---//End-header---->
			<!----//End-banner---->
			<!----start-content--->
			<div class="content">
					<div class="about">
						<div class="wrap">
						<form name='user_reg' method='POST' action='#'>
<center><b><i><font size="10">SIGNUP</font></i></b>
<table>
<tr><td>Email:</td><td><input type='email' name='txt2' required='yes'></td></tr><br>
<tr><td>Username:</td><td><input type='required' name='txt1' required='yes'></td></tr><br>
<tr><td>Password:</td><td><input type='password' name='psw' required='yes'></td></tr><br>

<tr><td></td><td><input type='submit' name='log' value='Submit'>
        
</table>
</center>
							</form>
							
						</div>
						<!---start-testimonials---->
						<div class="testimonials">
							<div class="wrap">
							<div class="testimonial-head">
							  <h1><span>VolksFeed</span> Testimonials</h1>
							  <p>Satisfied Users of VolksFeed !!!!</p>
							</div>
							<div class="testimonial-grids">
								<div class="testimonial-grid">
									
									<p>An ingenious way to know the desires of people of an organization.</p>
									<a href="#">Elon Musk</a>
								</div>
								<div class="testimonial-grid">
									
									<p>A real time saver when we need to choose bewteen products.</p>
									<a href="#">Larry Page</a>
								</div>
								<div class="testimonial-grid">
									
									<p>Helped me to customize and optimize customer needs.</p>
									<a href="#">Satya Nadella</a>
								</div>
								<div class="clear"> </div>
							</div>
				  		</div>
				  		<!---//End-testimonials---->
				  		<!----start-clients-slider--->
			
</body>


</html> 




