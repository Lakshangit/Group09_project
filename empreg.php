<?php include("main.php"); ?>

<body>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1>REGISter</h1>
                        <div class="regform">
                            <div class="col-md-6">

                            <form action="includes/empadd.inc.php" method="POST">

                                <div class="form-group input-group">
                                    <!-- <label for="">First Name</label>  -->
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="emp_id" placeholder="Employee ID">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="Address" placeholder="Address">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="position" placeholder="Position">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="int" class="form-control" name="tp" placeholder="Contact">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" name="mail" placeholder="E-mail">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="date" class="form-control" name="DOB" placeholder="Date of Brth">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="salary" class="form-control" name="salary" placeholder="salary">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit" name="submit"> Register </button>
                                    
                                </div><br>   
                                
                                

                            </div>            

                            </form>

                        </div>

                    </div>

                    <div class="col-md-6">
                       <div class="delform">
                            <h3>To Delete</h3>
                            <form action="includes/empdelete.inc.php" method="POST">
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess">User ID </label>
                                    <input type="text" class="form-control" id="inputSuccess" name="deleteemp">
                                </div>

                                <div>
                                    <button class="btn btn-danger" type="submit" name="delete" value="delete"> Delete </button>
                                        
                                </div><br>
                            
                            </form>

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