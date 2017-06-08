<?php
	session_start();
	if(!isset($_SESSION['fmail']))
		header('location: index.php');
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
             		 <?php
					   		session_start();
							
							session_destroy();
							
							header('location: ../login.php');
					   ?>
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
