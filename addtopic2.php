<html>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">	
<form name=pgm1 method=POST action="addtopic2.php">

<form name=pgm1 method=POST action="addquestion3.php">


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
						<!-- <center><b><i><font size="30">Movie</font></i></b><br><br> -->
			
<center><u><b><i><font size="30" color="black">ADD QUESTION</font></i></b></u><br><br>

<?php
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
echo "Add topic deleted:<select name='s_topic'>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "select distinct tname from tbl_question where status='disable'";
$result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
{
?>

<option>
<?php echo $row["tname"]; ?>
</option>
<?php 
}
echo "<br>";
echo "<input type='submit' name='clk1' value='ADD Topic'>";
echo "<input type='submit' name='clk1' value='Home'>";
if(isset($_POST['clk1']))
{
if($_POST["clk1"]=='Home')
{
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/home.php');
}
if($_POST["clk1"]=='ADD Topic')
{
$t=$_POST["s_topic"];
echo"$t";
$sql = "update tbl_question set status='enable' where tname='$t'";
$conn->query($sql); 
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/admin_home.php');

}


}
?>

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
</center>
</form>
</body>
</html>

