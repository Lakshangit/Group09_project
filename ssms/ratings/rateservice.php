<?php

$customer_id = $_POST["customer_id"];
$employee_id = $_POST["employee_id"];
$rate = $_POST["rate"];
echo "customer ID  : ".$customer_id."<br>";
echo "Employee ID  : ".$employee_id."<br>";
echo "Rated value  : ".$rate."<br>";

$curYear = date('Y');
$curMonth = date('M');

echo "Current year $curYear and month $curMonth";

// database properties
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ratings (customer_id, employee_id, year, month, rating)
VALUES ('$customer_id', '$employee_id', $curYear, '$curMonth', $rate)";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>