<html>
<form name=pgm1 method=POST action="#">
<center><u><b><i><font size="30" color="red">VolksFeed</font></i></b></u><br><br></center>
<?php
$i=$_POST['clk5'];
$j=0;
$servername = "localhost";
$username = "pgroup1403";
$password = "pgroup1403";
$dbname = "db_pgroup1403";
$conn = mysqli_connect($servername, $username, $password, $dbname);
while($j<$i)
{
$qiid=$_POST["qid$j"];
$jans=$_POST["opt$j"];
$sql = "INSERT INTO tbl_answer VALUES ($qiid,$jans)";
if ($conn->query($sql) === TRUE) {   echo "sucess";}
$j=$j+1;
}
header('Location:http://server.nirmalamca.com/PRJ14/pgroup1403/FMS/thankyou.php');
?>

</form>
</html>

