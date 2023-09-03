<?php

require_once '../database/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

$sql = "INSERT INTO 
        users 
            (username, password, confirmpassword, email, phonenumber) 
        VALUES 
        ('$username','$password','$confirmpassword','$email','$phonenumber')
        ";

if (mysqli_query($conn, $sql)) {
     header("Location: ../Admin/userShow.php");
     //echo "New record created successfully.";
} else {
     echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
