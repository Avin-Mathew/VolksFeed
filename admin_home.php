<html>
<center>
<form name='login' method='POST' action='#'>
<body>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">
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
					<div class="logo"><a href="http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/admin_home.php">VolksFeed</a></div>
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
			<form name='login' method='POST' action='admin_home.php'><br>
<center><b><i><font size="5" color="Black">Admin Home</font></i></b></center>
<center><b><font size="5" color="Black">************</font></b></center><br><br>
<b><i><font size="5" color="Black">Menu</font></i></b><br>
<b><font size="5" color="Black">******</font></b><br><br>
			
<?php

echo "<input type='submit' name='log' value='Add Category'>";
echo "<input type='submit' name='log' value='Remove Category'>";
echo "<input type='submit' name='log' value='Add Question'>";
echo "<input type='submit' name='log' value='Remove Question'>";
echo "<input type='submit' name='log' value='View Report'>";
echo "<input type='submit' name='log' value='Logout'>";

if(isset($_POST['log']))
{

if($_POST["log"]=='Add Category')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/addtopic.php');


if($_POST["log"]=='Remove Category')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/removetopic.php');

if($_POST["log"]=='Add Question')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/addquestion.php');

if($_POST["log"]=='Logout')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/home.php');

if($_POST["log"]=='Remove Question')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/rmquestion.php');

if($_POST["log"]=='View Report')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/viewreport.php');


}
?>
						 
								
							</div>
						</div>
						<!---start-testimonials---->
						<div class="testimonials">
							<div class="wrap">
							<div class="testimonial-head">
							  <h1><span>VolksFeed</span> Team</h1>
							  <p>Developers behind the VolksFeed !!!!</p>
							</div>
							<div class="testimonial-grids">
								<div class="testimonial-grid">
									<a href="#"><img src="images/test-people1.png" alt=""></a>
									<p>Codeing is done keeping in view the general public. This system empowers the public to actively participate in feedback process.</p>
									<a href="#">Akhil Joseph</a>
								</div>
								<div class="testimonial-grid">
									<a href="#"><img src="images/test-people2.png" alt=""></a>
									<p>Designing of VolksFeed meets simplicity needed by a website and responsiveness for a complex feedback management system .</p>
									<a href="#">Avin Mathew</a>
								</div>
								<div class="testimonial-grid">
									<a href="#"><img src="images/test-people3.png" alt=""></a>
									<p>Database &nbsp;modelling becomes crucial when dealing with a dynamic webiste. VolksFeed fulfills all such needs effectively. &nbsp; </p>
									<a href="#">Jithu P. James</a>
								</div>
								<div class="clear"> </div>
							</div>
				  		</div>
				  		<!---//End-testimonials---->  		
</body>
</html>



