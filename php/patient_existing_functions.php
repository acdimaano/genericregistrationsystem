<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$nhi = $_POST["nhi"]; 

	$query = "select oid from tbcustomerdetails where nhi = '$nhi'";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	$row = mysqli_fetch_array($result);
	$patient_number = $row[0];
	
	header( "Location: http://localhost/genericregistrationsystem/patient_selectspecialty.php?patient_number=$patient_number" );

	closeConnection($conn);
?>