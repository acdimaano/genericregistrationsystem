<?php
	//This file is for patient queue
	//generation.
	
	include("db_connection.php");
	include("constants.php");
	//global variables for tables and web url
	global $tbpracticedetails, $tbpracticeschedule, $tbuser, $weburl;
	$conn = getConnection();
	
	//Patient and doctor variables
	$patient_number = $_GET["patient_number"]; 
	$doctor_number = $_GET["doctor_number"]; 
	
	//Get queue number
	$query = "select oid, user_oid, queue_number from $tbpracticedetails where user_oid = '$doctor_number'";
	$result = mysqli_query($conn, $query);

	if($result){
		$row = mysqli_fetch_array($result);
		$queue_number = $row[2];
		$queue_number = $queue_number + 1;
		//update again tbpracticedetails with new queue_number
		$query = "update $tbpracticedetails set queue_number = '$queue_number' where user_oid = '$doctor_number'";
		$result = mysqli_query($conn, $query);
	}
	else {
		$query = "insert into $tbpracticedetails (user_oid, queue_number) values ('$doctor_number', '1')";
		$result = mysqli_query($conn, $query);	
		$queue_number = '1';
	}	
	
	//insert doctor and patient record with queue number
	$query = "insert into $tbpracticeschedule (user_oid, customer_oid, served, schedule) values ('$doctor_number', '$patient_number', '0', '$queue_number')";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	//Get doctor details
	$query = "select first_name, last_name, specialty, room_no from $tbuser where oid = '$doctor_number'";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");
	
	$row = mysqli_fetch_array($result);
	
	$first_name = $row[0];
	$last_name = $row[1];
	$specialty = $row[2];
	$room_no = $row[3];
	
	if ($specialty == 'neuro'){
		$specialty = 'Neurologist';
	}	
	else if ($specialty == 'cardio'){
		$specialty = 'Cardiologist';
	}	
	else if ($specialty == 'natmed'){
		$specialty = 'Natural Medicine';
	}	
	else if ($specialty == 'dentist'){
		$specialty = 'Dentist';
	}	
	else if ($specialty == 'lab'){
		$specialty = 'Laboratory';
	}	
	else if ($specialty == 'int'){
		$specialty = 'Internist';
	}	
	else if ($specialty == 'ortho'){
		$specialty = 'Orthopedic';
	}	
	else if ($specialty == 'pulmo'){
		$specialty = 'Pulmonologist';
	}	
	else if ($specialty == 'pedia'){
		$specialty = 'Pediatrician';
	}	
	else if ($specialty == 'eye'){
		$specialty = 'Eye Center';
	}	
	else if ($specialty == 'fammed'){
		$specialty = 'Family Medicine';
	}	
	else if ($specialty == 'ob'){
		$specialty = 'OB Gynecologist';
	}	
	

	header( "Location: ".$weburl."patient_number.php?patient_queue=$queue_number&first_name=$first_name&last_name=$last_name&specialty=$specialty&room_no=$room_no" );

	closeConnection($conn);
?>
