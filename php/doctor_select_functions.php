<?php

	//This file is for doctor select functions.
	//Will redirect to doctor specialist
	include("db_connection.php");
	include("constants.php");
	//Global variable web url
	global $weburl;
	$conn = getConnection();
	
	$specialty = $_GET["specialty"];
	
	header( "Location: ".$weburl."specialty_doctorlist.php?specialty=$specialty" );

	closeConnection($conn);
?>
