<html>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">	
<form name='vreport' method='POST' action='viewreport3.php'>

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


<?php
$cat=$_POST["clk2"];
$e=1;
$i=0;
$b2=0;
$five=0;
$four=0;
$three=0;
$two=0;
$one=0;
$k=1;
$total=0;

$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "select category from tbl_question where category='$cat'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if ($row==true) 
{
 $cookie_name = "ccategory";
       $cookie_value = "$cat";
       setcookie($cookie_name, $cookie_value);
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/viewreport4.php');

}
$sql2 = "select category from tbl_question where tname='$cat'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
if ($row2==true) 
{

$sql3 = "select qid,question from tbl_question where tname ='$cat'";
$result3 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result3) > 0)
{
  echo "$cat";
  echo "<br>";
   while($row3 = mysqli_fetch_assoc($result3)) 
    {   
     echo "<table border='17' > <tr> <td>";
  
     $b2=$row3["qid"];
echo "";
     $b=$row3["question"];
        echo "$e.</td><td>. $b  .</td>";

           $sql4 = "select count(answer) from tbl_answer where qid=$b2 and answer=5";
           $result4 = mysqli_query($conn, $sql4);
           while($row4 = mysqli_fetch_assoc($result4)) 
               { 
                   $five=$row4["count(answer)"];
                   echo "<td> 5* = $five ,</td> ";

               }

  $sql5 = "select count(answer) from tbl_answer where qid=$b2 and answer=4";
           $result5 = mysqli_query($conn, $sql5);
           while($row5 = mysqli_fetch_assoc($result5)) 
               { 
                   $four=$row5["count(answer)"];
                   echo " <td>4* = $four , </td>";

               }

  $sql6 = "select count(answer) from tbl_answer where qid=$b2 and answer=3";
           $result6 = mysqli_query($conn, $sql6);
           while($row6 = mysqli_fetch_assoc($result6)) 
               { 
                   $three=$row6["count(answer)"];
                   echo "<td> 3* = $three ,</td> ";

               }
  $sql7 = "select count(answer) from tbl_answer where qid=$b2 and answer=2";
           $result7 = mysqli_query($conn, $sql7);
           while($row7 = mysqli_fetch_assoc($result7)) 
               { 
                   $two=$row7["count(answer)"];
                   echo "<td> 2* = $two , </td>";

               }
 $sql8 = "select count(answer) from tbl_answer where qid=$b2 and answer=1";
           $result8 = mysqli_query($conn, $sql8);
           while($row8 = mysqli_fetch_assoc($result8)) 
               { 
                   $one=$row8["count(answer)"];
                   echo "<td> 1* = $one </td>";

               }

//echo "<br>";
 $i=$i+1;
 $e=$e+1;
echo "</tr></table>";
    }

 //header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/.php');
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




