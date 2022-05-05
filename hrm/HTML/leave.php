<!-- Including connection.php for the time-being -->
<?php include('../PHP/connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave</title>
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
                    <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Employee Details</h5>
                    </div>
                </a>
                <a href="leave.php">
                    <div class="tab active"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
                    </div>
                </a>
                <div class="tab1">
                    <!-- <button id="logout" onclick="logOut()">Logout</button> -->
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
                    <div class="dropdown">
                        <button class="dropbtn" >Admin</button>
                        <!-- <h6 class="prf-username">Admin</h6> -->
                        <div  id="myDropdown" class="dropdown-content">
                        <!-- <button id="logout" onclick="logOut()">Logout</button> -->
                        </div>
                    </div>

                    <!-- Styling for User drop down -->
                    <style>

                        .prf-container{
                            margin-right:40px;
                        }
                        .dropbtn {
  /* background-color: #FFFFFF; */
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}
                    </style>
                </div>
            </div>

            <div class="dashboard-content">
            <h1 class="ContentTitle">Leave Requests</h1><br><br>
            </div>
            <div class="table-container">
                <h1 class="heading">Leave Request Data</h1>
                <table class="table">
                    <thead>
                    <tr class="columns">
                    <th name="employeeid">Date</th>
                            <th name="employeeid">Employee I.D</th>
                            <th name="department">Department</th>
                            <th name="name">Names</th>
                            <th name="status">Status</th>
                            <th name="info">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Selecting the data from employee database for the time being
                    Once the employee section is finishes , the database would be link from there! -->
                        <?php 


$db_select ="SELECT * from leaverequest";
$result = $dbconnection -> query($db_select);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $leave_date = $row['leave_date'];
        $emp_id = $row['employee_id'];
        $depart = $row['department'];
        $name = $row['employee_name'];
        $leave_type = $row['leave_type'];
        $reason = $row['reason'];
        $user_name = $row['user_name'];
        $status = $row['status'];
        // This section is still in progress!!!
        echo "
        <tr>
        <td> $leave_date</td>
                            <td> $emp_id </td>
                            <td> $depart</td>
                            <td> $name </td>
                            <td> $status </td>";?>
                            <td><form method="post">
                            <!-- <input type="button" value="Details" class="table" style="background-color:#04AA6D;"><a style="color:white;" href="">EDIT ME </a> -->
                            <input class="table" name="details" value="Details" onclick="location.href='adminleavereq.php?employid=<?php echo $emp_id; ?>&employee_name=<?php echo $name;?>&leavedate=<?php echo $leave_date;?>&department=<?php echo $depart;?>&status=<?php echo $status;?>&username=<?php echo $user_name;?>&reason=<?php echo $reason;?>&leavetype=<?php echo $leave_type?>'" style="background-color:#04AA6D; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;">    
                            <!-- <form method="post"><input type="submit" class="table" name="delete" value="Delete" style="background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;"><form> -->
                        </form></td>
                            <?php
                                // <td><form method="post">
                                // <a href="salary.php?ida=echo '$s_num'">
                                // </form>
                                // <form method="post"><input type="submit" class="table" name="delete" value="Delete" style="background-color:red"><form></td>
                            echo '</tr>';
    }
            
}
?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
</body>

</html>