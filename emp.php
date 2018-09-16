
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>

    

</head> -->
<link rel="stylesheet" href="assets/css/style.css">
<?php include("main.php"); 
include("includes/connection.php");
?>

<body>

            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
         
                    <main>

                    <?php

                        
                        $result = mysqli_query($conn, "SELECT * FROM employee ;");
                            if (!$result) {
                                die("Database query failed: " . mysqli_error($conn));
                            }
                    ?>
                        <?php
                         echo "<table>
                            <thead>
                            <tr>
                                <th> Employee ID </th>
                                <th>
                                 First Name
                                </th>
                                <th>
                                Last Name
                                </th>
                                <th> Address </th>
                                <th> Position </th>
                                <th> Contact </th>
                                <th> mail </th>
                                <!-- <th> Edit Detail </th> -->
                                <th> Delete </th>
                            </tr>";
                        ?> 
                        
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan='3'>
                                <a href="empreg.php"> Add Employee </a>
                                </th>
                            </tr>
                            </tfoot>";
                            ?>
                            <?php
                            if(isset($_POST['submit'])){
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tbody>
                                    <tr>
                                        <td>{$row['emp_id']}</td>
                                        <td>{$row['fname']}</td>
                                        <td>{$row['Address']}</td>
                                        <td>{$row['Position']}</td>
                                        <td>{$row['tp']}</td>
                                        <td>{$row['mail']}</td>
                                        <td>{$row['mail']}</td>";
                        
                            }
                            echo  
                                    "</tr>
                                </tbody>
                            </table>";
                            }
                            ?>
                            

                        
                            <!-- </main> -->

                            
                                <!-- //  <td data-title='Provider Name'>
                                // 1
                                // </td>
                                // <td data-title='Provider Name'>
                                // Iacob 
                                // </td>
                                // <td data-title='Provider Name'>
                                // Geaorgescu
                                // </td>
                                // <td data-title='Provider Name'>
                                // 57/4
                                // </td>
                                // <td data-title='Provider Name'>
                                // super
                                // </td>
                                // <td data-title='contact'>
                                // 012258888
                                // </td>
                                // <td data-title='email'>
                                // dula@
                                // </td>
                                // </td>
                                // <td class='select'>
                                // <a class='button' href='#'>
                                //     Select
                                // </a>
                                // </td>
                                // <td data-title='Provider Name'>
                                // <a class='button' href='#'>
                                //     Select
                                // </a> 
                            // </tr>
                             -->
                            
                            <!-- </tbody> -->
                        <!-- </table>
                        
                        
                    </main> -->
                        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                            <script src="js/index.js"></script>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    
</body>
