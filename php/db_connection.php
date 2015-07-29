<?php

//This file is for db connectivity for all
//PHP calls

//Dev details
//$host = 'localhost';
//$username = 'root';
//$password = '';
//$database = 'dbgenericregistrationsystem';

//Live details

$host = 'fdb12.biz.nf';
$username = '1727459_dbgrs';
$password = 'C%&?EF(J4)(0';
$database = '1727459_dbgrs';

function getConnection(){
	return mysqli_connect("localhost", "root", "" , "dbgenericregistrationsystem");
}

function closeConnection($conn){
	mysqli_close($conn);
}

?>