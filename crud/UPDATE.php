<?php

require_once '../database/db_connection.php';

$sql = "UPDATE users 
        SET 
        username='admin0000', 
        password='1234'
        WHERE
            id = '1'
            ";
if (mysqli_query($conn, $sql)) {
     echo "Record updated successfully";
} else {
     echo "Error updating record: ". mysqli_error($conn); 
    }
mysqli_close($conn); 