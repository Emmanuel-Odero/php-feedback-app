<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'feedbackApp');
//Creating the database connection
$connect= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//Check connection
if($connect->connect_error){
    die('Connection Failed '.$connect->connect_error);
}
//echo 'Connection Successful'; //testing connetion