<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$fname = $_POST["fname"]; 
	$lname  = $_POST["lname"];
	$room_number = $_POST["room_number"]; 
	$email  = $_POST["email"];
	$specialty = $_POST["specialty"]; 
	$day  = $_POST["day"];
	$time  = $_POST["time"];

	//echo $fname.'<br/>'; 
	//echo $lname.'<br/>'; 
	//echo $room_number.'<br/>';  
	//echo $email.'<br/>';
	//echo $specialty.'<br/>';
	//echo $day.'<br/>';
	//echo $time.'<br/>';
	
	$query = "insert into tbuser (email, user_id, first_name, last_name, specialty, days_avail, time_avail) values ('$email', '$email', '$fname', '$lname', '$specialty', '$day', '$time')";
	echo $query;	   
	$result = mysqli_query($conn, $query);
	$doctor_number = mysqli_insert_id($conn);
	//$doctor_number = $row[0];
	echo $doctor_number;
	$query = "insert into tbpracticedetails (user_oid, queue_number) values ('$doctor_number', '1')";
	$result = mysqli_query($conn, $query);
	
	if ($result){
		//header( "Location: http://localhost/genericregistrationsystem/admin_welcomepage.php" );
	}
	else {
		//header( "Location: http://localhost/genericregistrationsystem/admin_user.php" );
	}	

	closeConnection($conn);
?>
