<?php

	//Functionalities called by other
	//PHP files
	include("db_connection.php");
	include("constants.php");
	
	//This function for saving organization details
	function saveOrg($orgname, $phone, $address){
		//echo $orgname;
		//echo $phone;
		//echo $address;
		
		global $tborganization, $weburl;
		$conn = getConnection();
		
		$query = "update $tborganization set name = '$orgname', phone = '$phone', address = '$address' where oid = 1";
		//echo $query;	   
		$result = mysqli_query($conn, $query);
		
		if ($result){
			header( "Location: ".$weburl."admin_welcomepage.php" );
		}
		else {
			header( "Location: ".$weburl."admin_record.php" );
		}
		closeConnection($conn);
	}

	//This function is for getting organization details
	function getOrg(){
		global $tborganization;
		$conn = getConnection();
		
		$query = "select * from $tborganization";
		//echo $query;	   
		$result = mysqli_query($conn, $query);
		if (!$result) die ("Close DB connection!");

		$row = mysqli_fetch_array($result);	
		$orgname = $row[1]; 
		$phone = $row[2];
		$address = $row[3];
		
		if ($result){
			header( "Location: ".$weburl."admin_orgsettings.php?orgname=$orgname&phone=$phone&address=$address" );
		}
		else {
			header( "Location: ".$weburl."admin_record.php" );
		}
		
		closeConnection($conn);
	}


?>
