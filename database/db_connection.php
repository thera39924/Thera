<?php
// db_connection.php
 
// Database connection settings $servername = "localhost";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_thera"; 
$port = "3306";

// Create a new MySQLi connection'
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check the connection
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}