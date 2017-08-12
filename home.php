<html>
<form name='login' method='POST' action='#'>
<body>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">

<?php
if(isset($_POST['clk1']))
{
if($_POST["clk1"]=='New User Registration')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/userreg.php');
if($_POST['clk1']=='Clear')
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/home.php');
if($_POST['clk1']=='Login')
{
$n1=$_POST["usr"];
$n2=$_POST["psw"];
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";

if($n1=='admin')
{ 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select username,password from tbl1_login where username='$n1' and password='$n2'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if ($row==true) 
{
    header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/admin_home.php');
}
}

if($n1!='admin')
{
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "select distinct tname from tbl_question";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) 
    {      
	$b=$row["tname"];
	if(($n1==$b)&&($n2==$b))
     {
       $cookie_name = "cat_of_rep";
       $cookie_value = "$b";
       setcookie($cookie_name, $cookie_value);
       header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/vrephome.php');
     }
}

$sql = "select username,password from tbl1_login where username='$n1' and password='$n2'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if ($row==true) 
{
    header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/user_home.php');
}
else 
echo "Username or Password is Incorrect!!!";


}
}
}
?>
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
						<center><b><i><font size="15">LOGIN</font></i></b></CENTER>
						<center>
						<table>
						 <tr><td>Username:</td><td><input type="text"  name="usr" ></td></tr><br>
						 <tr><td>Password:</td><td><input type="password"  name="psw" ></td></tr><br>
						 <tr><td></td><td><input type="submit" value="Login" name="clk1"><input type="submit" value="Clear" name="clk1"></td></tr>
						 </table>	
							<body background="">
							</center>
							</form>
							
						</div>
						<!---start-testimonials---->
						<div class="testimonials">
							<div class="panel-right">
						<br><br>
								  <p>VolksFeed started with a desire to gather feedback from the common public. </p>
								  <p>It's a novel initiative to reduce the communication gap between the creator and the user. </p>
								  <p>"There is no failure, only feedback" - Robert Allen.</p>
								</div>
								<div class="clear"> </div>
							</div>
						</div>
								<div class="clear"> </div>
							</div>
				  		</div>
				  		<!---//End-testimonials---->
				  		<!----start-clients-slider--->
			
</body>
</html>

