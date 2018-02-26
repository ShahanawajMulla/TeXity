
<?php

session_start();
if(isset($_SESSION['username']))
{


}else{ echo "<script> alert('not ');</script>";
header("Location: login.html");
 }


$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$x=$_GET["id"];
$query="DELETE FROM `prod` WHERE id=$x";
mysql_query($query);
if($query) {	echo "<script> alert('Data Delete SuccessFully ');</script>"; 
				header("Location: change.php");
			}
			else {	echo "<script> alert('Sory Unable to Delete Data');</script>"; }
			

?>