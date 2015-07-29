<?php

	//This for login functionality
	//Will check the login for email/user id
	include("db_connection.php");
	include("constants.php");
	
	//Global declaration for table and web url
	global $tbuser, $weburl;
	$conn = getConnection();
	
	// Inialize session
	session_start();	
	
	//Login details variables
	$login_email = $_POST["login_email"]; 
	$login_password  = $_POST["login_password"];
	$userpassword1 = password_hash($login_password, PASSWORD_DEFAULT);
	//echo $login_password;
	//echo $userpassword1;

	$query = "select user_id, user_password, role from $tbuser where user_id = '$login_email'";
	echo $query;
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	$row = mysqli_fetch_array($result);
	$userpassword = $row[1];
	$role = $row[2];
	//echo $role;
	
	if ($userpassword != ''){
		$_SESSION['username'] = $row[0];
		if ($role == 1){
			header( "Location: ".$weburl."admin_welcomepage.php" );
		}
		else if ($role == 2){
			header( "Location: ".$weburl."doctor_selectspecialty.php" );
		} 
		else if ($role == 3){
			header( "Location: ".$weburl."patient_welcome.php" );
		}
		else {
			header( "Location: ".$weburl."index.php" );
		}	
	}
	else {
		header( "Location: ".$weburl."login.php" );
	}	

	closeConnection($conn);
?>
