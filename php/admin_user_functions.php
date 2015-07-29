<?php

	//This file is for admin user functionality
	include("db_connection.php");
	include("constants.php");
	$conn = getConnection();
	//Global variable declaration for tables and web url
	global $tbuser, $tbpracticedetails, $weburl;
	
	$fname = $_POST["fname"]; 
	$lname  = $_POST["lname"];
	$room_number = $_POST["room_number"]; 
	$email  = $_POST["email"];
	$specialty = $_POST["specialty"]; 
	$day  = $_POST["day"];
	$time  = $_POST["time"];
	
	
	//========
	

	if(isset($_POST["day"])) {

	echo "You chose the following day(s): <br>";

		foreach ($day as $nameofday){
			//echo $nameofday."<br />";
			$days = $days.$nameofday;
		}

	} // end brace for if(isset

	else {

		echo "You did not choose a nameofday.";

	}
	//========
	
	echo $fname.'<br/>'; 
	echo $lname.'<br/>'; 
	echo $room_number.'<br/>';  
	echo $email.'<br/>';
	echo $specialty.'<br/>';
	//echo $day.'<br/>';
	echo $time.'<br/>';
	
	$query = "insert into $tbuser (email, user_id, first_name, last_name, specialty, days_avail, time_avail, room_no, date_updated) values ('$email', '$email', '$fname', '$lname', '$specialty', '$days', '$time', '$room_number', now())";
	//echo $query;	   
	$result = mysqli_query($conn, $query);
	$doctor_number = mysqli_insert_id($conn);
	//$doctor_number = $row[0];
	//echo $doctor_number;
	$query = "insert into $tbpracticedetails (user_oid, queue_number) values ('$doctor_number', '0')";
	$result = mysqli_query($conn, $query);
	
	if ($result){
		header( "Location: ".$weburl."admin_welcomepage.php" );
	}
	else {
		header( "Location: ".$weburl."admin_record.php" );
	}	

	closeConnection($conn);
?>
