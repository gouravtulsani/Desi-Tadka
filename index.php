<!DOCTYPE html>
<html lang="en">
<head>
<title>Desi Tadka</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Lobster_13_400.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/easyTooltip.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bgSlider.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/tms-0.3.js" type="text/javascript"></script>
<script src="js/tms_presets.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div id="bgSlider"></div>
<div class="bg_spinner"></div>
<div class="extra">
  <!--==============================header=================================-->
  <header>
    <div class="top-row">
      <div class="main">
        <div class="wrapper">
          <h1><a href="index.php">Desi Tadka</a></h1>
          <ul class="pagination">
            <li class="current"><a href="images/bg-img3.jpg"></a></li>
            
          </ul>
      </div>
    </div>
    <div class="menu-row">
      <div class="menu-border">
        <div class="main">
          <nav>
            <ul class="menu">
              <li><a class="active" href="index.php">Home</a></li>
			  
              <li><a href="video.php">Video</a></li>
             
              <li><a class="active" href="equip.php">Equipments</a></li>
              <li><a href="login.php">Login</a></li>
              <li class="last"><a href="registration.php">Registration</a></li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--==============================content================================-->
  <div class="inner">
    <div class="main">
      <section id="content">
        <div class="slider">
          <ul class="items">
		  <?php 
						
							include "connect.php";
							
							$sql="select * from category";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
						?>
						   <li> <img src="admin/<?php echo $row[2]; ?>"  style="width:260px; height:140px;" alt="" />
              <div class="banner"> <strong class="title"> <strong><?php echo $row[1] ?> </strong></strong>
                <p class="p3"><?php echo $row[3]; ?></p>
                 </div>
            </li>
						
         
            <?php
			}
			?>
          </ul>
          <a class="banner-2" href="#"></a> </div>
        <ul class="pags">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
        <div class="bg">
          <div class="padding">
            <div class="wrapper">
            
			

						<?php 
						
							include "connect.php";
							
							$sql="select * from category";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
						?>	
						<article class="col-1">
                <h3><?php echo $row[1] ?></h3>
                <p><ul>
							<li>
								<img src="admin/<?php echo $row[2]; ?>" style="width:260px; height:140px;" alt="Image" align="middle" border=2><Br><br>
								<div>
									
									<p align="justify"><?php echo $row[3]; ?></p>																		
								
								</div>
							</li>
							</ul>
						</p>
                <div class="relative"> <a class="button-2" href="cat_details.php?sname=<?php echo $row[1] ?>">View <?php echo $row[1] ?> Recipes</a> </div>
				<br><Br>
              
</article>	
						<?php
							}
							?>
							
							
					
           
            </div>
          </div>
        </div>
        <div class="padding-2">
          <div class="indent-top">
            <div class="wrapper">
              <article class="col-3">
                <h4><strong>Welcome</strong> <em>to Our Site!</em></h4>
               	<h2><font style="text-transform:uppercase"> News</font></h2>
				<ul id="blog">
				<li></li>
				<?php 
							include "connect.php";
							
							$sql="select * from news";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
						?>
					<li>
						<span class="date"><h2><?php echo $row[2] ?></h2></span>
						<p align="justify"> &emsp; <?php echo substr("$row[1]",0,30); ?> . . .  <a href="news_details.php?sid=<?php echo $row[0] ?>"> Read more</a></p>
						
						
					</li>
					<?php
						}
					?>					
				</ul>
              </article>
              <div class="extra-wrap"> <a href="#"><img src="images/banner-1.jpg" alt="" /></a> </div>
            </div>
          </div>
        </div>
      </section>
      <div class="block"></div>
	  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'fa875241-8fcf-4116-994c-0f83bacea739', f: true }); done = true; } }; })();</script>
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<footer>
  <div class="padding">
    <div class="main">
      <div class="wrapper">
        <div class="fleft footer-text"> Copyright &copy; 2017 All Rights Reserved <strong> Developed by <a target="_blank" href="#">Arya College Of Engineeering & I.T.</a></strong>
          <!-- {%FOOTER_LINK} -->
        </div>
        <ul class="list-services">
          <li>Link to Us:</li>
          <li><a class="tooltips" href="#"></a></li>
          <li class="item-1"><a class="tooltips" href="#"></a></li>
          <li class="item-2"><a class="tooltips" href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuart',
        preset: 'simpleFade',
        slideshow: 10000,
        banners: 'fade',
        pauseOnHover: true,
        waitBannerAnimation: false,
        pagination: '.pags'
    });
});
</script>
</body>
</html>
