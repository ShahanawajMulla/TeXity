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
<title>TeXity  | Delete Product Information</title>
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
		<li><a href="change.php?"class="selected"> PRODUCT ROMOVE </a></li>
        <li><a href="change1.php?">PRODUCT EDIT</a></li>
       

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
    <!-- Begin Intro -->
    <div class="intro"> 
  <br><br><br>
	<li><p><a href="admin.php"><input type="submit" name="Back" value="Back"></a></p></li> 
	
      <h1> Delete the Product Information </h1>
    </div>
	

		<hr><hr>   <h2><center>    Company Product Names  </center></h2>
	<hr><hr>
	<br><br><br>
	<hr><h3><center>Cotton Growth Company</center></h3><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=1 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Spinning Mills</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=2 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Weaving Processing company</center></h3><hr>
  <?php

	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=3 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Dying Processes</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=4 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Bleaching Processes</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=5 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Finishing Processing company</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=6 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Garment Products</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=7 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
 	<hr><h3><center>Market Products</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=8 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
	<hr><h3><center>Fabric Products</center></h3><hr>
  <?php
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=9 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="delete.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  <br><br><br>
 
	
	
	
	
	
  </div>
  
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