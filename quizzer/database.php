<?php
//to create connection with the database
$db_user="root";
$db_host="localhost";
$db_pass="";
$db_name="quizzer";

//connect to database using object
$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);

//error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit();
}