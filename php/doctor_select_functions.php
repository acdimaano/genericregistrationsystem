<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$specialty = $_GET["specialty"];
	
	header( "Location: http://localhost/genericregistrationsystem/specialty_doctorlist.php?specialty=$specialty" );

	closeConnection($conn);
?>
