
<?php
$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	
	
if(isset($_POST['subp'])) {
			$b1=$_POST['pnm'];
			$b2=$_POST['cnm'];
			$b3=$_POST['des'];
			$b4=$_POST['bc'];
			$b5=$_POST['fc'];
			$c=$_POST['c'];
$res=mysql_query("UPDATE `prod` SET `name`=['$b1'],`des`=['$b3'],`com`=['$b2'],`bcost`=['$b4'],`fcost`=['$b5'],`date`=[CURDATE()],`cat`=['$c'] WHERE id=$x "); 
			if($res) {	echo "<script> alert('Data Updated  SuccessFully ');</script>"; 
			header("Location: admin.html");
			}
			else {	echo "<script> alert('Sory Unable to Update Data');</script>";
			header("Location: edit.php");
			}
			
}

?>

