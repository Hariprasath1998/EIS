<?php 

// 	$servername='localhost';
// 	$username='Mark_42';
// 	$password='enigma';
// 	$dbname='EIS';

	$servername='remotemysql.com';
	$username='51MdWQ8QKb';
	$password='aGfBw7kyse';
	$dbname='51MdWQ8QKb';
	// Establish Connection to database
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	//Checking connection
	if(!$conn) {
		echo "Connection Error\n". mysql_connect_error();
	}else{
		// echo "Database Connected\n";
	}
 ?>
