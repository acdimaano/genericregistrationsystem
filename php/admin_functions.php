<?php

	//This file checking admin functions
	//To check for admin, doctor and patient accounts
	include("db_connection.php");
	include("constants.php");
	//Global variable for table and web url
	global $tbuser, $weburl;
	$conn = getConnection();
	//General variable declarations
	$fname = $_POST["fname"]; 
	$lname  = $_POST["lname"];
	$userid = $_POST["userid"]; 
	$email  = $_POST["email"];
	$access_type = $_POST["access_type"]; 
	$password  = $_POST["password"];
	$confirm_password  = $_POST["confirm_password"];

	echo $fname.'<br/>'; 
	echo $lname.'<br/>'; 
	echo $userid.'<br/>';  
	echo $email.'<br/>';
	echo $access_type.'<br/>';
	echo $password.'<br/>';
	echo $confirm_password.'<br/>';
	
	if ($access_type == 'admin'){
		$role = '1';
	}
	else if ($access_type == 'doctor'){
		$role = '2';
	}
	else if ($access_type == 'patient'){
		$role = '3';
	}	
	
	$query = "insert into $tbuser (email, user_id, first_name, last_name, role, user_password, date_updated) values ('$email', '$userid', '$fname', '$lname', '$role', '$password', now())";
	echo $query;	   
	$result = mysqli_query($conn, $query);
	
	if ($result){
		header( "Location: ".$weburl."admin_welcomepage.php" );
	}
	else {
		header( "Location: ".$weburl."admin_user.php" );
	}	

	closeConnection($conn);
?>
