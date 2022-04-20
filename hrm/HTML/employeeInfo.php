<?php include_once("../PHP/connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
</head>

<body>

    <div class="main">
        <div class="leftSidebar">
            <div class="logo-ctn">
                <img src="../assets/logo.png" alt="">
                <h3>Quinate Creations</h3>
            </div>

            <div class="tabs">
                <a href="dashboard.php">
                    <div class="tab"><img src="../assets/dashboard.png" alt="">
                        <h5>Dashboard</h5>
                    </div>
                </a>
                <a href="empreg.php">
                    <div class="tab"><img src="../assets/employeeAdd.png" alt="">
                        <h5>Create Employee</h5>
                    </div>
                </a>
                <a href="details.php">
                    <div class="tab active"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Employee Details</h5>
                    </div>
                </a>
                <a href="leave.php">
                    <div class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
                    </div>
                </a>
                
                <div class="tab1">                    <!-- <button id="logout" onclick="logOut()">Logout</button> -->
                </div>

            </div>
        </div>
        <div class="main-container">
            <div class="top-bar">
                <button id="toggle" class="circle"></button>
                <div class="prf-container">
                    <div class="prf-circle">
                        <img src="../assets/pp.png" alt="">
                    </div>
                    <h6 class="prf-username">Admin</h6>
                </div>
            </div>

            <div class="dashboard-content">
                <h1 class="ContentTitle">Employee Details</h1><br><br>
            </div>
            <div class="table-container">
                <h1 class="heading">Employee Information</h1>


                <table class="table1">
                    <thead style="">
                        <tr class="columns" >
                           
                            <th name="name">Name:</th>  
                            <th><?php $fullname=$_REQUEST['forename'];
                                echo $fullname;
                            ?></th>
                            
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="department">Department:</th>
                            <th><?php $depart=$_REQUEST['department'];
                                echo $depart;
                            ?></th>
                            
                            
                        </tr>
                        <tr class="columns">
                         
                            <th name="designation">Designation:</th>
                            <th><?php $designa=$_REQUEST['designation'];
                                echo $designa;
                            ?></th>
                           
                            
                        </tr>
                        <tr class="columns">
                            
                            <th name="empId">Employee ID:</th>
                            <th><?php $empid=$_REQUEST['employID'];
                                echo $empid;
                            ?></th>
                          
                        </tr>
                        <tr class="columns">
                           
                            <th name="email">Email:</th>
                            <th>
                            <?php $email=$_REQUEST['email'];
                                echo $email;
                            ?>
                            </th>
                            
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="contact">Contact:</th>
                            <th>
                            <?php $contact=$_REQUEST['contact'];
                                echo $contact;
                            ?>
                            </th>
                            
                          
                        </tr>
                        <tr class="columns">
                            
                            <th name="joined_date">Joined Date:</th>
                            <th>
                            <?php $issued_date=$_REQUEST['issued_date'];
                                echo $issued_date;
                            ?>
                            </th>
                           
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="gender">Gender:</th>
                            <th>
                            <?php $gender=$_REQUEST['gender'];
                                echo $gender;
                            ?>
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody> 
                    </tbody>

                </table>
                <?php
                    $bank_acc = $_REQUEST['bankacc'];
                    $paym_date=$_REQUEST['payDate'];
                    $paym_details =$_REQUEST['payDetails'];
                    $status = $_REQUEST["status"];
                    $amount = $_REQUEST["amount"];
                    $contact = $_REQUEST['contact'];
                ?>
                <input class="table1" type="button" name="details" s value="Salary Sheet" onclick="location.href='salary.php?employee=<?php echo $empid?>&forename=<?php echo $fullname?>&payDate=<?php echo $paym_date ?>&payDetails=<?php echo $paym_details?>&bankacc=<?php echo $bank_acc?>&status=<?php echo $status?>&amount=<?php echo $amount?>&contact=<?php echo $contact?>'" style="background-color:#04AA6D; text-align:center; width:200px;color:white; padding:5px; cursor:pointer;">    
            </div>  
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
</body>
</html>
