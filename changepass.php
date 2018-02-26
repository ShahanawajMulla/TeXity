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
<title>TeXity  | Admin Login </title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" /><![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
<script type="text/javascript">
</script>


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
	
	
	               

			<?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM user WHERE cat=1 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="changepass.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>

	
	
	  <!-- Begin Wrapper -->
  <div id="wrapper">
    <!-- Begin Intro -->
    <div class="intro">   <br><br><br>
  <li><p><a href="setpass.php"><input type="submit" name="Back" value="Back"></a></p></li> 

	<br><hr><hr><br> <h2> OLD PASSWORD OF ADMIN</h2><br><hr><hr><br>
	<?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$v=$_GET['id'];
	
	$sqlq = "SELECT * FROM users WHERE username='$v' "; 
	$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {
echo '<table>
			<tr> <td id="nn">USER Name           </td><td>=====</td>		 	 <td id="mm">'.$row['username'].'</td> </tr>
			<tr> <td id="nn">PASSWORD   		 </td><td>=====</td>	         <td id="mm">'.$row['password'].'</td> </tr>
			
		</table>';
	$a1=$row['username'];
	$a2=$row['password'];
	
}
?> <hr><hr>
<h4></br></br></br>

<form name="myform" method="post" onSubmit="return VALIDATE()"  >
<span id="tot"><h2>ENTER THE NEW PASSWORD OF ADMIN</h2> <?php?></span></br></br><hr>
USER Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="word" placeholder="Product Name" required="required" name="pnm" value="<?php echo $a1; ?>"></br><br>
PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="word" placeholder="Company Name" required="required" name="cnm" value="<?php echo $a2; ?>"></br><br>
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
			
$res=mysql_query("UPDATE `users` SET `username`='$b1',`password`='$b2' WHERE  username='$x' "); 
			if($res) {	echo "<script> alert('Data Updated  SuccessFully ');</script>"; 
					header('Location:./setpass.php');
			}
			else {	echo "<script> alert('Sory Unable to Update Data');</script>";
		
			}
			
}

?>


  <!-- End Header Wrapper -->
  <div class="clearfix"></div>
  <div class="push"></div>
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