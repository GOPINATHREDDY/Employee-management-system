<?php

$server = "localhost";
$database = "vba_project";
$username = "root";
$password = "";

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
	die("Unable to make a connection to the database");
}

?>