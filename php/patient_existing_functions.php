<?php

	//This is for patient existing functions
	//This will display list of specialties
	include("db_connection.php");
	include("constants.php");
	//Global declarations
	global $tbcustomerdetails, $weburl;
	$conn = getConnection();
	//Unique id for patients
	$nhi = $_POST["nhi"]; 

	$query = "select oid from $tbcustomerdetails where nhi = '$nhi'";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	$row = mysqli_fetch_array($result);
	$patient_number = $row[0];
	
	header( "Location: ".$weburl."patient_selectspecialty.php?patient_number=$patient_number" );

	closeConnection($conn);
?>