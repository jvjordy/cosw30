<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC_PHP');
$password   = getenv('DB_PW_PUBLIC_PHP');
$dbname     = getenv('DB_NAME_PHP');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>