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
                                Upload Recipes
                            </div>
                            <div class="panel-body">
                                <form name="myform" action="upload_recipes_add.php" method="post" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="exampleInputEmail1">Recipes Name : *</label>
							<input type="text" class="form-control" id="exampleInputEmail1" name="rec_name" placeholder="Receips Name" required />
						  </div>						  						 
						  
						  <div class="form-group">
							<label for="exampleInputFile">Ingredients : *</label> 	<img src="br.PNG">
							<textarea class="form-control" name="rec_inde" rows="3" placeholder="Ingredients"></textarea>
						  </div>
						  
						  <div class="form-group">
							<label for="exampleInputEmail1">Recipes Image : *</label>
							<input type="file" class="form-control" id="exampleInputEmail1" name="rec_image" placeholder="Recipes Image" required />
						  </div>
						  
						  <div class="form-group">
							<label for="exampleInputEmail1">Recipes Category : *</label>
							 <select name="recipes_cat" class="form-control">
								<option> Select Category</option>
									<?php
										include "include/connect.php";
										
										$sql2="select name Descending  from category";
										$result2=mysql_query($sql2);
											
										while($row2=mysql_fetch_array($result2))
										{
									?>
											<option><?php echo $row2[0]; ?></option>
									<?php
										}
									?>
								  
							  </select>
						  </div>	
						  
						  <div class="form-group">
							<label for="exampleInputFile">Description : *</label> 	<img src="br.PNG">
							<textarea class="form-control" name="rec_desc" rows="3" placeholder="Description"></textarea>
						  </div>
						 						  						 
						
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success">Upload Recipes</button>
								  <button type="reset" class="btn btn-danger">Clear All</button>
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
			 
			 
			 
			 
			 <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
	                               View Upload Recipes
                            </div>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>                                            
                                            <th>SNo.</th>		
											<th>Recipes Name</th>	
											<th>Upload Date</th>											
											<th>Image</th>
											<th>Category</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
									<?php
											include "include/connect.php";
											
											$sql="select * from upload_recipes";
											$result=mysql_query($sql);
											
											$i=1;
											while($row=mysql_fetch_array($result))
											{
									?>
										<tr>
											  <td><?php echo $i; ?></td>
											  <td><?php echo $row[1]; ?></td>
											  <td><?php echo $row[3]; ?></td>	
											  
											  <td><img src="upload/<?php echo $row[5] ?>" height="70" width="70" /></td>	
											  <td><?php echo $row[6]; ?></td>	
											  <td><a class="btn btn-danger" href="delete_recipes.php?recipes_id=<?php echo $row[0] ?>">Delete</a></td>
											</tr>
									<?php
										$i++;
										}
									?>
                                </table>
                            </div>
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
