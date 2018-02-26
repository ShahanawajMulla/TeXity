<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Bleaching</title>
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
      <h1> Bleaching Process </h1>
    </div>
	
	<p>
  Textile bleaching is one of the stages in the manufacture of textiles. All raw textile materials,
when they are in natural form, are known as 'greige' material (pronounced grey-sh). This greige
material will have its natural color, odor and impurities that are not suitable for clothing materials.
Not only the natural impurities will remain on the greige material but also the add-ons that were
made during its cultivation, growth and manufacture in the form of pesticides, fungicides, worm
killers, sizes, lubricants, etc. The removal of these natural coloring matters and add-ons during the
previous state of manufacturing is called scouring and bleaching.
</p>
<p>
Scouring <hr>
Scouring is the first process carried out with or without chemicals, at room temperature or at
suitable higher temperatures with the addition of suitable wetting agents, alkali and so on.
Scouring removes all the waxes, pectins and makes the textile material hydrophilic or water
absorbent. See also scouring wool.
</p>
<p>
Bleaching <hr>
The next process of decolorization of greige material into a suitable material for next processing is
called bleaching. Bleaching of textiles can be classified into oxidative bleaching and reductive
bleaching.
</p>
<p>
Oxidative bleaching <hr>
Generally oxidative bleachings are carried out using sodium hypochlorite, sodium chlorite or
hydrogen peroxide. Natural fibres like cotton, ramie, jute, wool, bamboo are all generally bleached
with oxidative methods.

</p>
<p>
Reductive bleaching<hr>


Reductive bleaching is done with sodium hydrosulphite, a powerful reducing agent. Fibres like
polyamides, polyacrylics and polyacetates can be bleached using reductive bleaching technology.
Optical whiteners <br>
After scouring and bleaching, optical brightening agents (OBAs) are applied to make the textile
material appear a more brilliant white. These OBAs are available in different tints such as blue,
violet and red.

</p>
<hr><hr> <center>  <h1>    Company Product  Name  </h1></center>	<hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=5 "; 
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