<html>
<title>VolksFeed : Public Feedback Management System</title>
<!<frameset cols="70%">	
<form name='vreport' method='POST' action='viewreport4.php'>

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
$k=1;
$kl=0;
$total=0;
$re=0;
$cat=$_COOKIE["ccategory"];
echo "$cat";
echo "<table border='2' > <tr> <td>";
   //echo "<b>CATEGORY</b><td> $cat</td></tr>";
//echo "<tr><td><b>TOPIC</b></td><td><b>NO OF REVIEWS  <td>REVIEW</b></td></tr>";
echo "<tr><td><b>TOPIC</b></td><td><b>NO OF REVIEWS  </td><td>REVIEW</b></td></tr>";
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "select distinct tname from tbl_question";
$sql11 = "select distinct tname from tbl_question where category='$cat'";
   $result11 = mysqli_query($conn,$sql11);
    while($row11 = mysqli_fetch_assoc($result11)) 
    { 
$fi=0;
$fo=0;
$th=0;
$tw=0;
$on=0;	
$ze=0;
$tb=0;
$tm=0;
$tview=1;
$qnno=1;
	echo "<br>";
       $kl=$row11["tname"];
       
       echo "<tr><td>$k.$kl<td>";
       $k=$k+1;
// to get qid

		$sql3 = "select qid from tbl_question where tname ='$kl'";
		$result3 = mysqli_query($conn, $sql3);
		while($row3 = mysqli_fetch_assoc($result3)) 
  		{   
              $total=0;
              $re=0;
		    $r=0;
   		    $b2=$row3["qid"];


              $sql4 = "select count(answer) from tbl_answer where qid=$b2 and answer=5";
           $result4 = mysqli_query($conn, $sql4);
           while($row4 = mysqli_fetch_assoc($result4)) 
           $fi=$row4["count(answer)"]; 
           
           $sql5 = "select count(answer) from tbl_answer where qid=$b2 and answer=4";
           $result5 = mysqli_query($conn, $sql5);
           while($row5 = mysqli_fetch_assoc($result5)) 
           $fo=$row5["count(answer)"];

  $sql6 = "select count(answer) from tbl_answer where qid=$b2 and answer=3";
           $result6 = mysqli_query($conn, $sql6);
           while($row6 = mysqli_fetch_assoc($result6)) 
             $th=$row6["count(answer)"];
                   
               
  $sql7 = "select count(answer) from tbl_answer where qid=$b2 and answer=2";
           $result7 = mysqli_query($conn, $sql7);
           while($row7 = mysqli_fetch_assoc($result7)) 
             $tw=$row7["count(answer)"];

 $sql8 = "select count(answer) from tbl_answer where qid=$b2 and answer=1";
           $result8 = mysqli_query($conn, $sql8);
           while($row8 = mysqli_fetch_assoc($result8)) 
          $on=$row8["count(answer)"];



$total=$fi*5+$fo*4+$th*3+$tw*2+$on*1;
$tm=$tm+$total;
   
    }


$sql333 = "select count(qid) from tbl_answer where qid=$b2";
              $result333 = mysqli_query($conn, $sql333);
               while($row333 = mysqli_fetch_assoc($result333)) 
  		      {  
                  $tview=$row333["count(qid)"];
                }
$sql3334 = "select count(qid) from tbl_question where tname='$kl'";
              $result3334 = mysqli_query($conn, $sql3334);
               while($row3334 = mysqli_fetch_assoc($result3334)) 
  		      {  
                  $qnno=$row3334["count(qid)"];
                }


$re=$tm/$tview;
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tview &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$tb=$re/$qnno;
if($tb<=5)
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tb   ";
else
{
$tb=$tb/2;
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tb ";
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




