<?php
include("connection.php");
// include("../empreg.php");

if(isset($_POST['delete'])) {

    $emp_id = $_POST['deleteemp'];

    $sql = "DELETE FROM employee WHERE employee_id='$emp_id';";
    $result = mysqli_query($conn,$sql);

     ?>

	<script type="text/javascript">
	alert("Successfully Delete");
    window.location.href = "../empreg.php";
	 </script>
		
	<?php
	exit();
}