<?php
	include("db_connection.php");
	include("constants.php");
	global $tbcustomerdetails, $weburl, $tbuser;
	$conn = getConnection();
	
	$user_oid = $_GET["user_oid"]; 
	
	$query = "select * from $tbuser where oid = $user_oid";
	$result = mysqli_query($conn, $query);
								
	if (!$result) die ("Close DB connection!");
	
	$row = mysqli_fetch_assoc($result);
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	$user_id = $row['user_id'];
	$role = $row['role'];
	
	if($role == '1'){
		$role = 'Site Admin';
	}
	else if($role == '2'){
		$role = 'Doctor Account';
	}
	else if($role == '3'){
		$role = 'Patient Access';
	}
	
	header( "Location: ".$weburl."admin_user_edit_delete.php?first_name=$first_name&last_name=$last_name&email=$email&user_id=$user_id&role=$role" );

	closeConnection($conn);
?>
