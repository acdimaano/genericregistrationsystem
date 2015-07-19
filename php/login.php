<?php
	$conn = mysqli_connect("localhost", "root", "" , "dbgenericregistrationsystem");
	
	$login_email = $_POST["login_email"]; 
	$login_password  = $_POST["login_password"];
	$userpassword = password_hash($login_password, PASSWORD_DEFAULT);

	$query = "insert into tbuser (email, user_id, user_password, first_name, last_name, address) values ('$login_email', '$login_email', '$userpassword', 'Alan', 'Dimaano', 'Auckland, New Zealand')";
	$result = mysqli_query($conn, $query);
	
	if (!$result) die ("Close DB connection!");

	header( "Location: http://localhost/genericregistrationsystem/admin_welcomepage.php" );

?>
