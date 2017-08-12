<html>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">	
<form name=pgm1 method=POST action="addtopic.php">

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
			<div class="content">
					<div class="about">
						<div class="wrap">
		
<center><u><b><i><font size="30" color="black">ADD CATEGORY</font></i></b></u><br><br>
<table>
<tr><td>Enter Category:</td><td><input type='text' name='txt1'></td></tr>
<br>
<tr><td>Enter Sub-Category:</td><td><input type='text' name='txt2' pattern="[A-Z a-z 0-9]{1,20}"></td></tr>
</table>
<?php
echo "<br>";
echo "<input type='submit' name='clk1' value='Submit'>";
echo "<input type='submit' name='clk1' value='Clear'>";
echo "<input type='submit' name='clk1' value='Home'>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='clk1' value='Add removed topic'>";
if(isset($_POST['clk1']))
{
if($_POST["clk1"]=='Submit')
{

$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$cat=$_POST['txt1'];
$subcat=$_POST['txt2'];
 if ($cat == null || $cat == "") 
        echo"Please complete the empty fields";
        else
{
 if ($subcat == null || $subcat == "") 
        echo"Please complete the empty fields";
      else
{
/*if(($cat='')&&($subcat=''))
	{	
	echo"	<script>";
	echo"	alert( 'INVALID INPUT' );";
	echo"window.location='server.nirmalamca.com/PRJ14/pgroup1403/FMS/addtopic.php';";
	echo "</script>";
	}
*/
$sql = "INSERT INTO topic (tname,category)VALUES ('$subcat', '$cat')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/admin_home.php');

} 
else { echo "Error: " . $sql . "<br>" . $conn->error; }
}
if($_POST["clk1"]=='Home')
{
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/admin_home.php');
}
if($_POST["clk1"]=='Clear')
{
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/addtopic.php');
}

}
}
if($_POST["clk1"]=='Add removed topic')
{
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/addtopic2.php');
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


