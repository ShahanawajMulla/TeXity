
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>TeXity  | Spinning</title>
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
	  <!-- Begin Wrapper -->
		<div id="wrapper">
		<!-- Begin Intro -->
		<div class="intro">   <br><br><br>
		<h1> Spinning Process </h1>

		<p>
		For history of textile engineering from 1750 to 1850, see Textile manufacture during the
Industrial Revolution. For hand processing methods, see Hand spinning.
Spinning is a major part of the textile industry. It is part of the textile manufacturing process where
three types of fibre are converted into yarn, then fabrics, which undergo finishing processes such
as bleaching to become textiles. The textiles are then fabricated into clothes or other products.
There are three industrial processes available to spin yarn, and a handicraft community who use
hand spinning techniques. Spinning is the twisting together of drawn out strands of fibres to form
yarn, though it is colloquially used to describe the process of drawing out, inserting the twist, and
winding onto bobbins.
			</p>
			<p>
	  Ring-spinning is the most common spinning method in the world. Other systems include air-jet and
open-end spinning. Open-end spinning is done using break or open-end spinning. This is a
technique where the staple fibre is blown by air into a rotor and attaches to the tail of formed yarn
that is continually being drawn out of the chamber. Other methods of break spinning use needles
and electrostatic forces.
The processes to make yarn short-staple yarn (typically spun from fibres from 0.75 to 2.0") are
blending, opening, carding, pin-drafting, roving, spinning, and—if desired—plying and dyeing. In
long staple spinning, the process may start with stretch-break of tow, a continuous "rope" of
synthetic fibre. In open-end and air-jet spinning, the roving operation is eliminated. The spinning
frame winds yarn a bobbin. Generally, after this step the yarn is wound to a cone for knitting or
weaving.
</p>
<p>
In mule spinning the roving is pulled off a bobbin and fed through rollers, which are feeding at
several different speeds.This thins the roving at a consistent rate. If the roving was not a
consistent size, then this step could cause a break in the yarn, or could jam the machine. The
yarn is twisted through the spinning of the bobbin as the carriage moves out, and is rolled onto
a cop as the carriage returns. Mule spinning produces a finer thread than the less skilled ring
spinning.
The mule was an intermittent process, as the frame advanced and returned a distance of
5ft.It was the descendant of a 1779 Crompton device. It produces a softer, less twisted
thread that was favoured for fines and for weft.
The ring was a descendant of the Arkwright water frame of 1769. It was a continuous
process, the yarn was coarser, had a greater twist and was stronger so was suited to be
warp. Ring spinning is slow due to the distance the thread must pass around the ring, and
similar methods have improved on this; such as flyer and bobbin and cap spinning.
Sewing thread, was made of several threads twisted together, or doubled.
</p>




<hr><hr> <center>  <h1>    Company Product  Name  </h1></center><hr><hr>
  <?php
	$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);
	$sqlq = "SELECT `id`,`name` FROM prod WHERE cat=2 "; 
$rs = mysql_query ($sqlq); 
while (@$row = mysql_fetch_assoc($rs)) {	echo '<a id="link" href="rate.php?id='.$row['id'].'">'.$row['name'].'</a></br>'; }
?>
    </div>
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