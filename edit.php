<?php

session_start();
if(isset($_SESSION['username']))
{


}else{ echo "<script> alert('not ');</script>";
header("Location: login.html");
 }

?>





<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Edit Product Entry</title>
<meta charset="UTF-8">

<script language="javascript" type="text/javascript">
  
</script>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" /><![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
<script type="text/javascript">
</script>

<style>
#lin{

margin:10px 30px 5px 0;
}
</style>

<style type="text/css">
</style>
</head>
<body>
<div id="container">
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper">
      <!-- Begin Header -->
      <div id="header">
		<div id="logo"><a href="index.html"><img src="6.png" width="100" height="60" alt="" /></a></div>
        <!-- Logo -->
        <!-- Begin Menu -->
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
            
                <ul>            

				<li><a href="admin.php" >ADMIN PAGE </a></li>
			<li><a href="input.php">PRODUCT ENTRY</a></li>
		<li><a href="change.php?"> PRODUCT ROMOVE </a></li>
        <li><a href="change1.php?" class="selected">PRODUCT EDIT</a></li>
       

		<li><a href="logout.php">LOGOUT</a></li> 		
		  			</ul>
			
          </div>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Header -->
    </div>
	
	
	  <!-- Begin Wrapper -->
  <div id="wrapper">
    <!-- Begin Intro --><br><br><br>
  <li><p><a href="change1.php"><input type="submit" name="Back" value="Back"></a></p></li> 

	<br><hr><hr><br> <h2> PRIVIOUS INFORMATION OF PRODUCT</h2><br><hr><hr><br>
	<?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$v=$_GET['id'];
	
	$sqlq = "SELECT * FROM prod WHERE id='$v' "; 
	$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {
echo '<table>
			<tr> <td id="nn">Name           </td><td>      </td>		 	 <td id="mm">'.$row['name'].'</td> </tr>
			<tr> <td id="nn">Company Name   </td><td>      </td>	         <td id="mm">'.$row['com'].'</td> </tr>
			<tr> <td id="nn">Address        </td><td>      </td>	         <td id="mm">'.$row['des'].'</td> </tr>
			<tr> <td id="nn">Basic Cost     </td><td>      </td>	         <td id="mm">'.$row['bcost'].' Rs.</td> </tr>
			<tr> <td id="nn">Final Cost     </td><td>      </td>	         <td id="mm">'.$row['fcost'].' Rs.</td> </tr>
			<tr> <td id="nn">Date           </td>			 <td id="mm">'.$row['date'].'</td> </tr>
			
		</table>';
	$a1=$row['name'];
	$a2=$row['com'];
	$a3=$row['des'];
	$a4=$row['bcost'];
	$a5=$row['fcost'];
	

}
?> <hr><hr>
<h4></br></br></br>

<form name="myform" method="post" onSubmit="return VALIDATE()"  >
<span id="tot"><h2>NEW INFORMATION OF PRODUCT</h2> <?php?></span></br></br><hr>
Product Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="word" placeholder="Product Name" required="required" name="pnm" value="<?php echo $a1; ?>"></br><br>
Company Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="word" placeholder="Company Name" required="required" name="cnm" value="<?php echo $a2; ?>"></br><br>
Address Of Company: &nbsp;<input placeholder="Address" required="required" name="des" value="<?php echo $a3; ?>"></br><br>
Basic Cost: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min=1 max=200000 placeholder="Basic Cost" required="required" name="bc" value="<?php echo $a4; ?>"></br><br>
Final Cost: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min=1 max=200000 placeholder="Final Cost" required="required" name="fc" value="<?php echo $a5; ?>"></br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" style="color:#0099FF;" value="Post Now" name="subp" />
</form>

</h4>
<?php
$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	
	$x=$_GET['id'];
if(isset($_POST['subp'])) {
			$b1=$_POST['pnm'];
			$b2=$_POST['cnm'];
			$b3=$_POST['des'];
			$b4=$_POST['bc'];
			$b5=$_POST['fc'];
			
$res=mysql_query("UPDATE `prod` SET `name`='$b1',`des`='$b3',`com`='$b2',`bcost`='$b4',`fcost`='$b5',`date`=CURDATE() WHERE  id='$x' "); 
			if($res) {	echo "<script> alert('Data Updated  SuccessFully ');</script>"; 
					header('Location:./change1.php');
			}
			else {	echo "<script> alert('Sory Unable to Update Data');</script>";
		
			}
			
}

?>

	</div>
  
  <!-- End Header Wrapper -->
  <!-- Begin Footer -->
  <div id="footer-wrapper">
    <div id="footer">
      <div id="footer-content">
        <!-- Begin Copyright -->
        <div id="copyright">
          <p>Copyright &copy; <a href="index.html">TeXity</a> - All Rights Reserved | Design By TeXity</a></p>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </div>
  <!-- End Footer -->
</div>
</body>
</html>