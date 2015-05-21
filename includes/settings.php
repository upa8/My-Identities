<?php

//for localhost
/*
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "login";
	$table_for_images = "images";
*/	
// for server 

	$host = "localhost";
	$user = "myiden";
	$pass = "myidentities";
	$dbname = "myidentity";
	$table_for_images = "images";
	
	
	
// for server use 
/*
define("DB_HOST", "localhost");
define("DB_NAME", "myidentity");
define("DB_USER", "myiden");
define("DB_PASS", "myidentities");
*/
	

	$con = mysqli_connect($host, $user, $pass, $dbname);

	if(mysqli_connect_errno($con))	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	$createTable = "CREATE TABLE IF NOT EXISTS `" . $table_for_images . "` (
	                `id` int(11) NOT NULL AUTO_INCREMENT,
	                `img_name` text NOT NULL,
	                `img_loc` text NOT NULL,
	                PRIMARY KEY (`id`)
	                ) DEFAULT CHARSET=utf8";

	mysqli_query($con, $createTable) or die('Unable to create table : ' . mysqli_error($con));

?>