<html>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">	
<form name=pgm2 method=POST action="user_home4.php">



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
						<!-- <center><b><i><font size="15">Movie</font></i></b><br><br>  -->
						
<center>
<?php
$i=0;
$e=1;
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$t=$_POST['clk2'];

echo "<font size='30'> $t</font>";
echo "<br>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select qid,question from tbl_question where tname ='$t' and status='enable'";
$result = mysqli_query($conn, $sql);
echo "<br>";
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result)) 
    {   
     $b2=$row["qid"];
     echo "<input type='hidden' name='qid$i' value='$b2'>";
     $b=$row["question"];
	echo "$e ) $b";
     echo "<br>";
     echo "<input type='radio' name='opt$i' value='5' required='yes'> 5 STAR";
	echo "<input type='radio' name='opt$i' value='4'> 4 STAR";
     echo "<input type='radio' name='opt$i' value='3'> 3 STAR";
     echo "<input type='radio' name='opt$i' value='2'> 2 STAR";
     echo "<input type='radio' name='opt$i' value='1'> 1 STAR";
      echo "<br>";
      echo "<br>";
 $i=$i+1;
 $e=$e+1;
    }

echo "<input type='hidden' name='clk5' value='$i' >";
echo "<input type='submit' name='clk' value='submit' >";
echo "<input type='hidden' name='clk4' value='$t' >";
echo "<img src=images/confused.png>";
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

