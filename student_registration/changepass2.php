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
                               <?php
								 
								 include "include/connect.php";
								 
								 $old=$_POST['old'];
							 	 $new=$_POST['new'];
								 
								 $email_id=$_SESSION['fmail'];
								
								 $sql="select * from registration_detail where email='$email_id' and pass='$old'";
								 $result=mysql_query($sql);
								 
								 if($row=mysql_fetch_array($result))
								 {
								 	$sql="update registration_detail set pass='$new' where email='$email_id'";
									mysql_query($sql);
									
									echo "<font face='Georgia, Times New Roman, Times, serif' size='+2' color=black>Password Change Successful </font>";
								}
								else
								{
									echo "<font face='Georgia, Times New Roman, Times, serif' size='+2' color=black>Please Right The Old Password Enter</font>";
								}
								 
							?>
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
