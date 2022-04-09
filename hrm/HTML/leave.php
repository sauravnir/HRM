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
                    <h6 class="prf-username">Admin</h6>
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


$db_select ="SELECT employee_id,first_name,last_name,department from employee";
$result = $dbconnection -> query($db_select);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $emp_id = $row['employee_id'];
        $depart = $row['department'];
        $name = $row['first_name']." ".$row['last_name'];;
         
        // This section is still in progress!!!
        echo "
        <tr>
                            <td> $emp_id </td>
                            <td> $depart</td>
                            <td> $name </td>
                            <td> Pending </td>
                            <td><form method='post' action='#'><input type='submit' class='table' name='open' value='Open' style='background-color:#04AA6D'></form></td>
                        </tr>";
    }
    
    if(isset($_POST['open'])){
        echo'<script> Swal.fire({
            icon: "warning",
            title: "Work in progress",
          })</script>';
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