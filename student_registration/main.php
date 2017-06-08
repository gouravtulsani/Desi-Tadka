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
                     <h2>Home</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Home
                            </div>
                            <div class="panel-body">
                                <h1><font face="Times New Roman, Times, serif;" style="text-transform:capitalize">Hello <?php echo $_SESSION['fmail'] ?></font></h1>
									<ul type="disc">
										<li>Upload Recipes</li>
											<ul type="circle">
												<li>Add Recipes</li>
												<li>View Recipes</li>
												<li>Delete Recipes</li>
											</ul>
			
										<li>Change Password</li>
										<li>Logout</li>	
			
									</ul>
                            </div>
                            <div class="panel-footer">
                                Arya College of Engineering & I.T.
                            </div>
                        </div>
                    </div>

                  <!-- /. ROW  --> 
                            
                 <!-- /. ROW  --> 
                   
                  <!-- /. ROW  -->    
                 <div class="row text-center pad-top">
                   
                 
                  </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
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
