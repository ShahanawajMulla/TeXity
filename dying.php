
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Dying</title>
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
        <!-- End Menu -->      </div>
      <!-- End Header -->
    </div>
	  <!-- Begin Wrapper -->
  <div id="wrapper">
    <!-- Begin Intro -->
    <div class="intro">  <br><br><br>
      <h1> Dyeing Process </h1>
    </div>
	
	
	<p>
	Dyeing is the process of adding color to textile products like fibers, yarns, and fabrics.[1] Dyeing is normally done in a special solution containing dyes and particular chemical material. After dyeing, dye molecules have uncut chemical bond with fiber molecules. The temperature and time controlling are two key factors in dyeing. There are mainly two classes of dye, natural and man-made.

The primary source of dye, historically, has generally been nature, with the dyes being extracted from animals or plants. Since the mid-18th century, however, humans have produced artificial dyes to achieve a broader range of colors and to render the dyes more stable to resist washing and general use. Different classes of dyes are used for different types of fiber and at different stages of the textile production process, from loose fibers through yarn and cloth to completed garments.

Acrylic fibers are dyed with basic dyes, while nylon and protein fibers such as wool and silk are dyed with acid dyes, and polyester yarn is dyed with disperse dyes. Cotton is dyed with a range of dye types, including vat dyes, and modern synthetic reactive and direct dyes.
The term "direct dye application" stems from some dyestuff
having to be either fermented as in the case of some
natural dye or chemically reduced as in the case of
synthetic vat and sulfur dyes before being applied. This
renders the dye soluble so that it can be absorbed by the
fiber since the insoluble dye has very little substantivity to
the fiber. Direct dyes, a class of dyes largely for dyeing
cotton, are water soluble and can be applied directly to the
fiber from an aqueous solution. Most other classes of
synthetic dye, other than vat and surface dyes, are also
applied in this way.
</p>
<p>
The term may also be applied to dyeing without the use of mordants to fix the dye once it is
applied. Mordants were often required to alter the hue and intensity of natural dyes and improve
color fastness. Chromium salts were until recently extensively used in dying wool with synthetic
mordant dyes. These were used for economical high color fastness dark shades such as black
and navy. Environmental concerns have now restricted their use, and they have been replaced
with reactive and metal complex dyes that do not require mordant.
Yarn dyeing [edit]
There are many forms of yarn dyeing. Common forms are the package form and the hanks form.
Cotton yarns are mostly dyed at package form, and acrylic or wool yarn are dyed at hank form. In
the continuous filament industry, polyester or polyamide yarns are always dyed at package form,
while viscose rayon yarns are partly dyed at hank form because of technology.[8]
</p> 
 
 
<hr><hr> <center>  <h1>    Company Product  Name  </h1></center>	<hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=4 "; 
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