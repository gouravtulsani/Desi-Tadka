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
                    <div class="col-lg-12 col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Delete Upload Recipes
                            </div>
                            <div class="panel-body">
						   <?php
								include "include/connect.php";
								
								$recipes_id=$_REQUEST['recipes_id'];
								
								$sql="delete from upload_recipes where recipes_id='$recipes_id'";
								$result=mysql_query($sql);
								
								echo "<font face='Georgia, Times New Roman, Times, serif' size='+1' color=black> Recipes delete successful.</font>";
							?>
						
                        </div>                           
							</form>
                        </div>
                    </div>
                  <!-- /. ROW  --> 
                            
                 <!-- /. ROW  --> 
                   
                  <!-- /. ROW  -->    
                 <div class="row text-center pad-top">
                   
                 
                  </div>
                  <!-- /. ROW  --> 
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
