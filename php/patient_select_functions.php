<?php

	//This file is for patient select functionality
	include("db_connection.php");
	include("constants.php");
	//global web url declaration
	global $weburl;
	$conn = getConnection();
	//Specific doctor specialty variables
	$specialty = $_GET["specialty"];
	$patient_number = $_GET["patient_number"];	
	//echo $patient_number;
	
	header( "Location: ".$weburl."patient_doctorlist.php?specialty=$specialty&patient_number=$patient_number" );

	closeConnection($conn);
?>
