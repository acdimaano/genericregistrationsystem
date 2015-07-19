<?php

function getConnection(){
	return mysqli_connect("localhost", "root", "" , "dbgenericregistrationsystem");
}

function closeConnection($conn){
	mysqli_close($conn);
}

?>