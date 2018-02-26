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
              

			<li><a href="admin.php" class="selected">ADMIN PAGE </a></li>
			<li><a href="input.php">PRODUCT ENTRY</a></li>
		<li><a href="change.php?"> PRODUCT ROMOVE </a></li>
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
    <div class="intro">   <br><br><br>
<br><hr><hr>      <h1> WELCOME IN TEXITY LOGIN PAGE </h1><hr><hr>

<center> <h2>
<?php
//retrieve session data
echo "Welcome ". $_SESSION['username'];
?><h2></center>
 
  </div><h5>
<br>        <li><a href="input.php">ENTER THE NEW PRODUCT & INFORMATION</a></li><br><hr>
<br>		<li><a href="change.php?">ROMOVE THE PRODUCT & INFORMATION</a></li><br><hr>
<br>        <li><a href="change1.php?">CHANGE INFORMATION OF PRODUCT</a></li><br><hr>
        
	<br>	<li><a href="logout.php">LOGOUT</a></li><br><hr><hr>
	<li><p><a href="setpass.php"><input type="submit" name="Change Password" value="Change Password"></a></p></li>
			</h5>

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