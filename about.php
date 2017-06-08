<!DOCTYPE html>
<html lang="en">
<head>
<title>Desi Tadka | About</title>
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
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page3">
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
            <li class="current"><a href="images/bg-img1.jpg">1</a></li>
            <li><a href="images/bg-img2.jpg">2</a></li>
            <li><a href="images/bg-img3.jpg">3</a></li>
          </ul>
          <strong class="bg-text">Background:</strong> </div>
      </div>
    </div>
    <div class="menu-row">
      <div class="menu-border">
        <div class="main">
          <nav>
            <ul class="menu">
              <li><a href="index.php">Home</a></li>
              
              <li><a  href="video.php">Video</a></li>
             
              <li><a href="login.php">Login</a></li>
              <li class="last"><a href="registration.php">Registration</a></li>
			  <li><a class="active" href="about.php">About Us</a></li>
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
        <div class="indent">
          <div class="wrapper">
            <article class="col-1">
              <div class="indent-left">
               <h3>A Few Words About Us</h3>
                <h6>Arya College of Engineering & I.T. </h6>
                <p>India is the second largest country in the world (population wise) and food is an important part of Indian culture. Just like the people the food they eat varies from place to place. Each part of India has it own style of cooking and special dishes. According to some ancient traditions from India, food is a gift from god and hence the preparation and consumption of food requires seriousness, concentration and a lot of time.</p>
                <div class="wrapper indent-bot">
                  <div class="column-1">
                  
                  <div class="column-2">
                    
                  </div>
                </div>
              </div>
              <div class="bg">
                <div class="padding">
                  <h3 class="p2"></h3>
                  <div class="wrapper p3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14216.054866555723!2d75.8935547!3d27.0297325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95adc5e198e9ced9!2sArya+Institute+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1494942141057" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                  <div class="wrapper">
                    
                  </div>
                </div>
              </div>
            </article>
            <article class="col-2">
             
              <h6 class="color-3"></h6>
              <div class="img-indent-bot">
              <ul class="list-1 indent-bot">
               
				<h3 class="border-bot"> Recipes Category</h3>
				<ul id="featured">
				
						<?php 
							include "connect.php";
							
							$sql="select * from category";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
						?>	
						
						<li>
							<a href="cat_details.php?sname=<?php echo $row[1] ?>" style="text-decoration:none;"><h2> <?php echo $row[1]; ?></h2></a>
						</li>
						
					<?php
						}
					?>				
				</ul>
			</div>
			<div>
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
			</div>
              </ul>
              <ul class="list-1">
                
              </ul>
            </article>
          </div>
        </div>
      </section>
      <div class="block"></div>
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<footer>
  <div class="padding">
    <div class="main">
      <div class="wrapper">
        <div class="fleft footer-text"> Copyright &copy; 2017 All Rights Reserved <strong> Developed by <a target="_blank" href="#">Arya College Of Engineering & I.T.</a></strong> </div>
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
</body>
</html>