<?php
	//This file is for organization functions
	//Calls methods to save or retrieve org details
	include("functions.php");
	

	$transaction = $_GET["transaction"];
	//echo $transaction;
	if ($transaction == '2'){
		$orgname = $_POST["orgname"]; 
		$phone  = $_POST["phone"];
		$address = $_POST["address"]; 
		saveOrg($orgname, $phone, $address);
	}
	else {
		getOrg();
	}
?>
