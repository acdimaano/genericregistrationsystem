<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$orgname = $_POST["orgname"]; 
	$phone  = $_POST["phone"];
	$address = $_POST["address"]; 

	echo $orgname.'<br/>'; 
	echo $phone.'<br/>'; 
	echo $address.'<br/>';  
	
	$query = "insert into tborganization (name, phone, address) values ('$orgname', '$phone', '$address')";
	echo $query;	   
	$result = mysqli_query($conn, $query);
	
	if ($result){
		//header( "Location: http://localhost/genericregistrationsystem/admin_welcomepage.php" );
	}
	else {
		//header( "Location: http://localhost/genericregistrationsystem/admin_record.php" );
	}	

	closeConnection($conn);
?>
