<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$patient_number = $_GET["patient_number"]; 
	$doctor_number = $_GET["doctor_number"]; 
	
	//Get queue number
	$query = "select oid, user_oid, queue_number from tbpracticedetails where user_oid = '$doctor_number'";
	$result = mysqli_query($conn, $query);

	if($result){
		$row = mysqli_fetch_array($result);
		$queue_number = $row[2];
		$queue_number = $queue_number + 1;
		//update again tbpracticedetails with new queue_number
		$query = "update tbpracticedetails set queue_number = '$queue_number' where user_oid = '$doctor_number'";
		$result = mysqli_query($conn, $query);
	}
	else {
		$query = "insert into tbpracticedetails (user_oid, queue_number) values ('$doctor_number', '1')";
		$result = mysqli_query($conn, $query);	
		$queue_number = '1';
	}	
	
	//insert doctor and patient record with queue number
	$query = "insert into tbpracticeschedule (user_oid, customer_oid, served, schedule) values ('$doctor_number', '$patient_number', '0', '$queue_number')";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	header( "Location: http://localhost/genericregistrationsystem/patient_number.php?patient_queue=$queue_number" );

	closeConnection($conn);
?>
