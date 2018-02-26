<?php


session_start();
if(isset($_SESSION['username']))
{


}else{ echo "<script> alert('not ');</script>";
header("Location: login.html");
 }


$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
if(isset($_POST['subp'])) {
			$b1=$_POST['pnm'];
			$b2=$_POST['cnm'];
			$b3=$_POST['des'];
			$b4=$_POST['bc'];
			$b5=$_POST['fc'];
			$c=$_POST['c'];
$res=mysql_query("INSERT INTO prod (`id`, `name`, `des`,`com`,`bcost`,`fcost`,`date`,`cat`) 
VALUES (NULL, '$b1','$b3','$b2','$b4','$b5',CURDATE(),'$c')"); 
			if($res) {	echo "<script> alert('Data Inserted SuccessFully ');</script>"; 
			header("Location: admin.html");
			}
			else {	echo "<script> alert('Sory Unable to Insert Data');</script>"; 
			header("Location: input.php");
			}
}



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | ADD Product Entry</title>
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
			<li><a href="input.php" class="selected">PRODUCT ENTRY</a></li>
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
	<br><br> <h3> NEW PRODUCT & IT'S INFORMATION ENTRY </h3><br><hr><hr>
</br></br></br>
  <li><p><a href="admin.php"><input type="submit" name="Back" value="Back"></a></p></li> 

<h4>
<form name="myform" method="post" >
<span id="tot">Products  Entry: <?php?></span></br></br><hr>
Product Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" placeholder="Product Name" required="required" name="pnm"></br><br>
Company Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" placeholder="Company Name" required="required" name="cnm"></br><br>
Address Of Company: &nbsp;<input placeholder="Address" required="required" name="des"></br><br>
Basic Cost: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min=1 max=200000 placeholder="Basic Cost" required="required" name="bc"></br><br>
Final Cost: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min=1 max=200000 placeholder="Final Cost" required="required" name="fc"></br><br>
<select name="c">
<option value="1">Cotton Growth</option>
<option value="2">Spinning Mills</option>
<option value="3">Weaving Process</option>
<option value="4">Dying Process</option>
<option value="5">Bleaching Process</option>
<option value="6">Finishing Process</option>
<option value="7">Garments</option>
<option value="8">Market</option>
<option value="9">Fabrics</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" style="color:#0099FF;" value="Post Now" name="subp" />
</form>
</h4>


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