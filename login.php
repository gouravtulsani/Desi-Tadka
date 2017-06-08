<!DOCTYPE html>
<html lang="en">
<head>
<title>Desi Tadka | Login</title>
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
             
              <li><a  href="equip.php">Equipments</a></li>
              <li><a  class="active" href="login.php">Login</a></li>
              <li class="last"><a href="registration.php">Registration</a></li>
			   <li><a href="about.php">About Us</a></li>
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
                <h3>Login Form</h3>
                <div class="p3">
                  <form id="contact-form" action="login_validate.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                      <label><span class="text-form">Email Id:</span>
                        <input name="fmail" type="text" class="span2" />
                      </label>
					  <br><br>
                      <label><span class="text-form">Password:</span>
                        <input name="fpass" type="password" class="span2" />
                      </label>
                      <div class="wrapper">
                        <div class="text-form"></div>
                        <div class="extra-wrap">
                          
                          <div class="clear"></div>
                          <div class="buttons"> 
		<input type="submit" value="Log In" style="background-color: #4CAF50; color: white; padding: 5px 5px; margin: 5px 0; border: none; border-radius: 3px; cursor: pointer;" /> 
	<input type="reset" value="Clear All" style="background-color:#993300; color: white; padding: 5px 5px; margin: 5px 0; border: none; border-radius: 3px; cursor: pointer;" /> 
	</div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="bg">
                <div class="padding">
                  <h3 class="p2"></h3>
                  <div class="wrapper p3">
                    
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