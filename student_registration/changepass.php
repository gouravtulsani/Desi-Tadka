<?php
	session_start();
	if(!isset($_SESSION['fmail']))
		header('location: ../login.php');
?>
<script language="javascript">
	function validate()
	{
		var fnew,fnew1;
		
		fnew=document.myform.new.value;
		fnew1=document.myform.new1.value;	
				
		if(fnew!=fnew1)
		{
			alert("Please Write The Same Retype Password ");
			return false;
		}
		
		return true;
	}
</script>

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
                     <h2>Change Password</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Change Password
                            </div>
                            <div class="panel-body">
                                <form name="myform" action="changepass2.php" method="post" onSubmit="return validate();">
								  <div class="form-group">
									<label for="exampleInputEmail1">Old Password : *</label>
									<input type="text" class="form-control" name="old" placeholder="Enter Old Password" required />
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputEmail1">New Password : *</label>
									<input type="password" class="form-control" name="new" placeholder="Enter New Password" required />
								  </div>
														  
								  <div class="form-group">
									<label for="exampleInputFile">Retype Password : *</label>
									<input type="password" class="form-control" name="new1" placeholder="Enter Re-Type Password" required />
								  </div>
														  
								   <hr />
														 
								  <button type="submit" class="btn btn-success">Change Password</button>
								  <button type="reset" class="btn btn-danger">Clear All</button>
              	             
							</form>
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
