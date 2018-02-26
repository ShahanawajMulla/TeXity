
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Finishing</title>
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
    <div class="intro"><br><br><br>
      <h1> WEL-COME IN TeXity </h1>
    </div>
	<div>
	<img src="FINISHING.jpg" alt="" width="900" height="400" />
	</div>

  <div align="left">	<span class="highlight3">  <hr>       
	  <h5>
Finishing- processing of textiles 
<p>    The woven cotton fabric in its loom-state, not only contains impurities, including warp size, but requires further treatment in order to develop its full textile potential. Furthermore, it may receive considerable added value by applying one or more finishing processes.
Desizing
Depending on the size that has been used, the cloth may be steeped in a dilute acid and then rinsed, or enzymes may be used to break down the size.
Scouring
Scouring, is a chemical washing process carried out on cotton fabric to remove natural wax and non-fibrous impurities (e.g. the remains of seed fragments) from the fibres and any added soiling or dirt. Scouring is usually carried in iron vessels called kiers. The fabric is boiled in an alkali, which forms a soap with free fatty acids (saponification). A kier is usually enclosed, so the solution of sodium hydroxide can be boiled under pressure, excluding oxygen which would degrade the cellulose in the fibre. If the appropriate reagents are used, scouring will also remove size from the fabric although desizing often precedes scouring and is considered to be a separate process known as fabric preparation. Preparation and scouring are prerequisites to most of the other finishing processes. At this stage even the most naturally white cotton fibres are yellowish, and bleaching, the next process, is required.[27]
Bleaching
Main article: Textile bleaching
Bleaching improves whiteness by removing natural coloration and remaining trace impurities from the cotton; the degree of bleaching necessary is determined by the required whiteness and absorbency. Cotton being a vegetable fibre will be bleached using an oxidizing agent, such as dilute sodium hypochlorite or dilute hydrogen peroxide. If the fabric is to be dyed a deep shade, then lower levels of bleaching are acceptable, for example. However, for white bed sheetings and medical applications, the highest levels of whiteness and absorbency are essential.[28]
Mercerising
Main article: Mercerized cotton
A further possibility is mercerizing during which the fabric is treated with caustic soda solution to cause swelling of the fibres. This results in improved lustre, strength and dye affinity. Cotton is mercerized under tension, and all alkali must be washed out before the tension is released or shrinkage will take place. Mercerizing can take place directly on grey cloth, or after bleaching.[29]
Many other chemical treatments may be applied to cotton fabrics to produce low flammability, crease resist and other special effects but four important non-chemical finishing treatments are:
Singeing
Main article: Singe § Textiles
Singeing is designed to burn off the surface fibres from the fabric to produce smoothness. The fabric passes over brushes to raise the fibres, then passes over a plate heated by gas flames.
Raising
Another finishing process is raising. During raising, the fabric surface is treated with sharp teeth to lift the surface fibres, thereby imparting hairiness, softness and warmth, as in flannelette.
Calendering
Main article: Calender
Calendering is the third important mechanical process, in which the fabric is passed between heated rollers to generate smooth, polished or embossed effects depending on roller surface properties and relative speeds.
Shrinking (Sanforizing)
Main article: Sanforization
Finally, mechanical shrinking (sometimes referred to as sanforizing), whereby the fabric is forced to shrink width and/or lengthwise, creates a fabric in which any residual tendency to shrink after subsequent laundering is minimal.
Dyeing
Main article: Dyeing
Finally, cotton is an absorbent fibre which responds readily to colouration processes. Dyeing, for instance, is commonly carried out with an anionic direct dye by completely immersing the fabric (or yarn) in an aqueous dyebath according to a prescribed procedure. For improved fastness to washing, rubbing and light, other dyes such as vats and reactives are commonly used. These require more complex chemistry during processing and are thus more expensive to apply.
Printing
Main article: Textile printing
Printing, on the other hand, is the application of colour in the form of a paste or ink to the surface of a fabric, in a predetermined pattern. It may be considered as localised dyeing. Printing designs onto already dyed fabric is also possible.
	</div>
	
	
		<hr><hr> <center>  <h1>    Company Product  Name  </h1></center>
	<hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=6 "; 
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