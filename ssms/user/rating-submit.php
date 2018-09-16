<?php 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT AVG(rating) FROM ratings WHERE employee_id='e24243'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
echo $row['AVG'];
print_r($row[]);
}

mysqli_close($conn);

?>