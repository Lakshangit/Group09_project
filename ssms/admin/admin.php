<?php 

// connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssms";

// read all emplyee ids from employee table
$employee_ids = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT employee_id FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // traverse data of each row
    while($row = $result->fetch_assoc()) {
        // add each element to the array
        array_push($employee_ids, $row["employee_id"]);
    }
} else {
    echo "0 results";
}

// find average ratings for each employee_id
$employee_ids_with_rating_avg = array();
$curYear = date('Y');
$curMonth = date('M');
foreach ($employee_ids as $value) {
    // select average rating for current year and current month
    $sql = "SELECT AVG(rating) FROM ratings WHERE employee_id='$value' AND year='$curYear' AND month='$curMonth' ";
    $result_ratings = $conn->query($sql);
    $average = $result_ratings->fetch_assoc();
    // add employee ID and average rating to array as pairs
    $employee_ids_with_rating_avg[$value] = $average['AVG(rating)'];       
}
echo "<br>Average ratings for each employee<br>";
print_r($employee_ids_with_rating_avg);

// find the one with maximum average rating
$max_rated_employee_id = NULL;
$max_ratings = 0;
foreach($employee_ids as $value){
    if($employee_ids_with_rating_avg[$value] > $max_ratings){
        $max_ratings = $employee_ids_with_rating_avg[$value];
        $max_rated_employee_id = $value;
    }
}
echo "<br>Max rated employee : ".$max_rated_employee_id;

// increment his increments and total_salary by 500 LKR
$sql = "UPDATE salary SET increments=increments+500, total_salary=total_salary+500 WHERE employee_id='$max_rated_employee_id'";

if ($conn->query($sql) === TRUE) {} else {
    echo "Error updating record: " . $conn->error;
}
echo " <br>Relevant increments have been added."; 

// close DB connection
$conn->close();

?>