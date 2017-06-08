<!DOCTYPE html>
<html lang="en">
<head>
<title>Desi Tadka | News</title>
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
<body id="page6">
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
              <li><a href="about.php">About Us</a></li>
              <li><a href="video.php">Video</a></li>
              <li><a href="login.php">Login</a></li>
              
              <li class="last"><a  href="registration.php">Registration</a></li>
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
                <h3>News Details</h3>
                <div class="p3">
                  <form id="contact-form" action="" method="post" enctype="multipart/form-data">
                    <fieldset>
                     <div>
						<?php 
							include "connect.php";
							
							$sid=$_REQUEST['sid'];
							
							$sql="select * from news where nid='$sid'";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
						?>
							<h3><center><font style="text-transform:uppercase"><?php echo $row[2] ?></font></center></h3><br>
							
							<font style="font-family:'Times New Roman', Times, serif; font-size:18px">
							<table>
								<tr>
									<th style="text-align:left" width="200">Title :</th>
									<td><font style="text-transform:capitalize"><?php echo $row[2] ?></font></td>
								</tr>
								<tr>
									<th style="text-align:left">Description :</th>
									<td><font style="text-transform:capitalize"><?php echo $row[1] ?></font></td>
								</tr>
								<tr>
									<th style="text-align:left">URL :</th>
									<td><font style="text-transform:capitalize"><?php echo $row[3] ?></font></td>
								</tr>
							</table>
						</font>
							<?php
								}
							?>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="bg">
                <div class="padding">
                  
                  </div>
              </div>
            </article>
            <article class="col-2">
              <h3 class="border-bot indent-bot"></h3>
              <div class="img-indent-bot">
                
              </div>
              <div class="img-indent-bot">
                <h6></h6>
               
              </div>
              <div class="img-indent-bot">
                <h6></h6>
                
              </div>
              <h6></h6>
              
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