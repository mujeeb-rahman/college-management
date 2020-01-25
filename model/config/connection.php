<!-- to establish database connection -->
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="student_management_system";
	$conn= new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);
	}
	//echo "connected successfully";
?>