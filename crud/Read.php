<?php

require_once '../database/db_connection.php';

$sql = "SELECT id, username, password FROM users ";
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
     echo "id: ". $row["id"]." - Name: " . $row["username"] ." - password: " .$row["password"]. "<br>";
  }
} else {
echo "0 results";
}
mysqli_close($conn);
?>