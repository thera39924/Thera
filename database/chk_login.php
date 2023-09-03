<?php
// Login.php
session_start();
// Import the database connection file
require_once 'db_connection.php';

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

//Perform the authentication check 
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)=== 1) {
   // Authentication successful
  //  $_SESSION['user'] = "thera": header('Location: ../aboutme.php');
  echo "Logined";
}else {
  // Authentication failed
  // header('Location: ../login.php');
  echo "Login failed.";
}


// Close the database connection
mysqli_close($conn);