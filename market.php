

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Market</title>
<meta charset="UTF-8">
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
              <li><a href="index.html" class="selected">Home</a></li>
              
              <li>Category
                <ul>
                  <li><a href="cotton.php">Cotton Growth </a></li>
                  <li><a href="spinning.php">Spinning Mills</a></li>
				  <li><a href="weaving.php">Weaving Process</a></li>
				         <li><a href="dying.php">Dying Process</a></li>
					     <li><a href="bleaching.php">Bleaching Process</a></li>
				   <li><a href="finishing.php">Finishing Process</a>
				  <li><a href="garment.php">Garments</a></li>
                  <li><a href="market.php">Market</a></li>
				  <li><a href="fabrics.php">Fabrics</a></li>
				</ul>
              <li><a href="about_ich.html">About Ichalkaranji</a></li>
              <li><a href="con1.html">Contact US</a></li>
              <li><a href="about.html">About US</a></li>
			  <li><a href="login.html" >Admin Login</a></li>
			  <li><a href="sitemap.html">Site Map</a></li>
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
      <h1> Market </h1>
    </div>
	
	<p>
		Here we search the company to marketing the cloths products  in Ichalkaranji  As well as in India
	</p>
<hr><hr> <center>  <h1>    Company Product  Name  </h1></center>	<hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=8 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {echo "*";	echo '<a id="link" href="rate.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>  

	
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