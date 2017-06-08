<?php
	//connect to the server
	$conn=mysql_connect("localhost","root","");
	
	
	//select database
	mysql_selectdb("recipes",$conn);
	

?>