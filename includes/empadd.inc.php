<?php 

include("connection.php");

if (isset($_POST['submit'])) {
    
    $emp_id     = mysqli_real_escape_string($conn,$_POST['emp_id']);
	$fname      = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname      = mysqli_real_escape_string($conn,$_POST['lname']);
	$Address    = mysqli_real_escape_string($conn,$_POST['Address']);
    $position   = mysqli_real_escape_string($conn,$_POST['position']);
    $tp         = mysqli_real_escape_string($conn,$_POST['tp']);
    $mail       = mysqli_real_escape_string($conn,$_POST['mail']);
    $DOB        = mysqli_real_escape_string($conn,$_POST['DOB']);
    $salary     = mysqli_real_escape_string($conn,$_POST['salary']);
    $pwd        = mysqli_real_escape_string($conn,$_POST['pwd']);

    // if(!preg_match("/^[a-zA-Z]*$/",$first) ||!preg_match("/^[a-zA-Z]*$/",$last)){
    //     header("Location:../empreg.php?signup=invalid");
    //     exit();
    // }else{
        // check if email valid
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //      header("Location:../empreg.php?signup=email");

        //     exit();
        // }
        // else{

            $sql =  "INSERT INTO `employee` (`employee_id`, `fname`, `lname`, `Address`, `position`, `tp`, `mail`, `DOB`, `salary`, `pwd`) 
                    VALUES ('$emp_id', '$fname', '$lname', '$Address', '$position', '$tp', '$mail', '$DOB', '$salary', '$pwd');";

            $result = mysqli_query($conn,$sql);
            // $resultcheck = mysqli_num_rows($result);
            // echo "success";
            ?>
			<script type="text/javascript">
				alert("Successfully Registered");
				window.location.href = "../empreg.php";
			</script>
		
			<?php
            
        // }   
    // }

}else
{
    
    echo "failed";
}


// Delete

// if (null !==(filter_input(INPUT_POST, 'delete'))){

//     $name = $_POST['emp_id'];

//     $sql1 = "DELETE FROM Employee WHERE emp_id='$emp_id';";
//     $result2 = mysqli_query($conn,$sql1);

//     if (!$result2){
//         echo "<script>alert(\"Error Occured!\");</script>";
//     }else {
//         echo "<script>alert(\"Successfully deleted!\");</script>";
//     }
// }