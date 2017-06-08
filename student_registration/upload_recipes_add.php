<?php
	session_start();
	if(!isset($_SESSION['fmail']))
		header('location: ../login.php');
?>
<?php include "include/head.php" ?>
</head>
<body>
       
    <div id="wrapper">
         <?php include "include/header.php" ?>
        <!-- /. NAV TOP  -->
	        <?php include "include/sidemenu.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Upload Recipes</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Upload Recipes
                        </div>
                        <div class="panel-body">
						   <?php
								include "include/connect.php";
								$rec_mail=$_SESSION['group2_email'];
								
								$rec_name=$_POST['rec_name'];
								$rec_inde=$_POST['rec_inde'];
								
								if($_FILES['rec_image']['error']<=0)
								{
									$fname3=$_FILES['rec_image']['name'];
									$ftype3=$_FILES['rec_image']['type'];
									$fsize3=$_FILES['rec_image']['size'];
									$ftmp3=$_FILES['rec_image']['tmp_name'];
									move_uploaded_file($ftmp3,"upload/$fname3");															
								}														
								
								$recipes_cat=$_POST['recipes_cat'];
								$rec_desc=$_POST['rec_desc'];
								
								$fdate=date("Y/m/d");
								
								$sql="select * from upload_recipes where recipes_name='$rec_name' and upload_by='$rec_mail'";
								$result=mysql_query($sql);
								
								if($row=mysql_fetch_array($result))
								{
									echo "<font face='Georgia, Times New Roman, Times, serif' size='+1' color=black> Recipes Already Upload here</font>";
								}
								else
								{
									$sql="insert into upload_recipes values('','$rec_name','$rec_mail','$fdate','$rec_inde','$fname3','$recipes_cat','$rec_desc')";
									mysql_query($sql);
																	
									echo "<font face='Georgia, Times New Roman, Times, serif' size='+2' color=black> Recipes upload successful.</font>";
								}													
							
						?>
                        </div>
                      </div>
                    </div>
                    
                </div>
             <!-- /. view........................................... INNER  -->
			 
			 
			 
	
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include "include/footer.php" ?>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
