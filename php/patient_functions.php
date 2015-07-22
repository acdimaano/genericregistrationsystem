<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$fname = $_POST["fname"]; 
	$lname  = $_POST["lname"];
	$middlename = $_POST["middlename"]; 
	$gender  = $_POST["gender"];
	$male = $_POST["male"]; 
	$bdate  = $_POST["bdate"];
	$address  = $_POST["address"];
	$phone  = $_POST["phone"];
	$nhi  = $_POST["nhi"];

	//echo $fname.'<br/>'; 
	//echo $lname.'<br/>'; 
	//echo $middlename.'<br/>';  
	//echo $gender.'<br/>';
	//echo $bdate.'<br/>';
	//echo $address.'<br/>';
	//echo $phone.'<br/>';
	//echo $nhi.'<br/>';
	
	$query = "insert into tbcustomerdetails (first_name, last_name, middle_name, address, mobile_number, birthdate, gender, nhi) values ('$fname', '$lname', '$middlename', '$address', '$phone', '$bdate', '$gender', '$nhi')";
	//echo $query;	   
	$result = mysqli_query($conn, $query);
	$patient_number = mysqli_insert_id($conn);
	
	if ($result){
		header( "Location: http://localhost/genericregistrationsystem/patient_selectspecialty.php?patient_number=$patient_number" );
	}
	else {
		header( "Location: http://localhost/genericregistrationsystem/patient_new.php" );
	}	

	closeConnection($conn);
?>
