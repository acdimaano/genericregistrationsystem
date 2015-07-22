<?php
	include("db_connection.php");
	$conn = getConnection();
	
	$login_email = $_POST["login_email"]; 
	$login_password  = $_POST["login_password"];
	$userpassword1 = password_hash($login_password, PASSWORD_DEFAULT);
	//echo $login_password;
	//echo $userpassword1;

	$query = "select user_id, user_password, role from tbuser where user_id = '$login_email'";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	$row = mysqli_fetch_array($result);
	$userpassword = $row[1];
	$role = $row[2];
	echo $role;
	
	if (password_verify($login_password, $userpassword)){

		if ($role == 1){
			header( "Location: http://localhost/genericregistrationsystem/admin_welcomepage.php" );
		}
		else if ($role == 2){
			header( "Location: http://localhost/genericregistrationsystem/doctor_selectspecialty.php" );
		} 
		else if ($role == 3){
			header( "Location: http://localhost/genericregistrationsystem/patient_welcome.php" );
		}
		else {
			header( "Location: http://localhost/genericregistrationsystem/index.php" );
		}	
	}
	else {
		header( "Location: http://localhost/genericregistrationsystem/login.php" );
	}	

	closeConnection($conn);
?>
