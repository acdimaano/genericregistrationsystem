<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$doctor_number = $_GET["doctor_number"]; 
	$customer_oid  = $_GET["customer_oid"];

	$query = "select * from tbcustomerdetails where oid = '$customer_oid'";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	$row = mysqli_fetch_assoc($result);
	$customer_oid = $row['oid'];
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$middle_name = $row['middle_name'];
	$address = $row['address'];
	$mobile_number = $row['mobile_number'];
	$birthdate = $row['birthdate'];
	$gender = $row['gender'];
	$nhi = $row['nhi'];
	
	if ($gender == 'm'){
		$gender = "Male";
	}
    else if ($gender == 'f'){
		$gender = "Female";
	}
	else {
		$gender = "Other";
	}	
	
	
	header( "Location: http://localhost/genericregistrationsystem/doctor_patientrecord.php?customer_oid=$customer_oid&first_name=$first_name&last_name=$last_name&middle_name=$middle_name&address=$address&mobile_number=$mobile_number&birthdate=$birthdate&gender=$gender&nhi=$nhi&doctor_number=$doctor_number" );

	closeConnection($conn);
?>
