<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Cotton</title>
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
			<li><a href="index.html" >Home</a></li>
              
            <li>Category
                <ul>
                  <li><a href="cotton.html">Cotton Growth </a></li>
                  <li><a href="spinning.html">Spinning Mills</a></li>
				  <li><a href="weaving.html">Weaving Process</a></li>
				         <li><a href="dying.html">Dying Process</a></li>
					     <li><a href="bleaching.html">Bleaching Process</a></li>
				   <li><a href="finishing.html">Finishing Process</a>
				  <li><a href="garment.html">Garments</a></li>
                  <li><a href="market.html">Market</a></li>
				  <li><a href="fabrics.html">Fabrics</a></li>
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
      <h1> Cotton Growth </h1>
    </div>
	
	<p>
	Cotton is a soft, fluffy staple fiber that grows in a boll, or protective capsule, around the seeds of cotton plants of the genus Gossypium in the family of Malvaceae. The fiber is almost pure cellulose. Under natural conditions, the cotton bolls will tend to increase the dispersion of the seeds.

The plant is a shrub native to tropical and subtropical regions around the world, including the Americas, Africa, and India. The greatest diversity of wild cotton species is found in Mexico, followed by Australia and Africa. Cotton was independently domesticated in the Old and New Worlds. The English name derives from the Arabic  quṭn , which began to be used circa 1400 AD. The Spanish word, "algodón", is likewise derived from the Arabic.

The fiber is most often spun into yarn or thread and used to make a soft, breathable textile. The use of cotton for fabric is known to date to prehistoric times; fragments of cotton fabric dated from 5000 BC have been excavated in Mexico and the Indus Valley Civilization (modern day Pakistan and some parts of India). Although cultivated since antiquity, it was the invention of the cotton gin that so lowered the cost of production that led to its widespread use, and it is the most widely used natural fiber cloth in clothing today.

Current estimates for world production are about 25 million tonnes or 110 million bales annually, accounting for 2.5% of the world's arable land. China is the world's largest producer of cotton, but most of this is used domestically. The United States has been the largest exporter for many years. In the United States, cotton is usually measured in bales, which measure approximately 0.48 cubic metres (17 cubic feet) and weigh 226.8 kilograms (500 pounds).</br></br>
	<hr><hr>   <h1>    Company Product  Names  </h1>
	<hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=1 "; 
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
        <!-- Begin Social Icons -->
      </div>
    </div>
  </div>
  <!-- End Footer -->
</div>
</body>
</html>