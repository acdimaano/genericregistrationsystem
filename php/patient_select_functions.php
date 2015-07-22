<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$specialty = $_GET["specialty"];
	$patient_number = $_GET["patient_number"];	
	//echo $patient_number;
	
	header( "Location: http://localhost/genericregistrationsystem/patient_doctorlist.php?specialty=$specialty&patient_number=$patient_number" );

	closeConnection($conn);
?>
