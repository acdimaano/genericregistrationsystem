<?php

	//This file is for patient insert functionality
	//Has the sql script for insert
	
	include("db_connection.php");
	include("constants.php");
	global $tbpracticecustomerdetails, $tbpracticeschedule, $weburl;
	$conn = getConnection();
	
	//Doctor and patient details 
	//variables
	$doctor_number = $_POST["doctor_number"]; 
	$customer_oid  = $_POST["customer_oid"];
	$diagnosis = $_POST["diagnosis"]; 
	$prescription  = $_POST["prescription"];
	
	$query = "insert into $tbpracticecustomerdetails (user_oid, customer_oid, details, prescription) values ('$doctor_number', '$customer_oid', '$diagnosis', '$prescription')";
	$result = mysqli_query($conn, $query);
	
	$query = "update $tbpracticeschedule set served = '1' where user_oid = '$doctor_number' and customer_oid = '$customer_oid'";
	$result = mysqli_query($conn, $query);
	//$patient_number = mysqli_insert_id($conn);
	
	if ($result){
		header( "Location: ".$weburl."doctor_welcome.php?doctor_number=$doctor_number" );
	}
	else {
		header( "Location: ".$weburl."patient_new.php" );
	}	

	closeConnection($conn);
?>
