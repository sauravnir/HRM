<?php  include('../PHP/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Sheet</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link rel="stylesheet" href="../CSS/salarysheet.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="main">
        <div class="leftSidebar">
            <div class="logo-ctn">
                <img src="../assets/logo.png" alt="">
                <h3>Quinate Creations</h3>
            </div>
            <!-- Tabs for sidebar -->
            <div class="tabs">
                <a href="employeedashboard.php">
                    <div class="tab"><img src="../assets/dashboard.png" alt="">
                        <h5>Dashboard</h5>
                    </div>
                </a>
                <a href="mydetails.php">
                    <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>My Details</h5>
                    </div>
                </a>
                <a href="salarysheet.php">
                    <div class="tab"><img src="../assets/salary.png" alt="">
                        <h5>Salary Sheet</h5>
                    </div>
                </a>
                <a>
                    <div id="dropdown-parent" class="tab active"><img src="../assets/leave.png" alt="">
                        <h5>Leave</h5>
                        <img id="dropdown-btn" style="position:absolute; right:0; cursor:pointer"
                            src="../assets/down.png" alt="">
                    </div>

                    <div class="dropdown-wrapper">
                        <a class="dropdown-href" href="leavereq.php">
                            <div class="tab"><img src="../assets/leave.png" alt="">
                                <h5>Request a Leave</h5>
                            </div>
                        </a>

                        <a class="dropdown-href" href="levstatus.php">
                            <div class="tab active1"><img src="../assets/leave.png" alt="">
                                <h5>Leave Status</h5>
                            </div>
                        </a>
                    </div>
                </a>

             

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
                        <button class="dropbtn" onclick="hoverdown()"><?php 
                    
                    $u_name = $_SESSION['employee_name'];
                    echo $u_name?></button>
                        <!-- <h6 class="prf-username">Admin</h6> -->
                        <div  id="myDropdown" class="dropdown-content">
                        <button id="logout" onclick="logOut()">Logout</button>
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

.dropbtn:hover, .dropbtn:focus {
  /* background-color: #2980B9; */
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
                    </style>

                    <!-- Script for user drop-down -->

<script>
    function hoverdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
                    
                </div>
            </div>

            <div class="dashboard-content">
                <h1>Leave Status</h1>
                <br>
                <hr style="height:6px; width:70%; background-color:blue; border:0 ">
                <br>
                <div class="dashboard-content1">
                <table>
                    <thead>
                        <tr>
                            <th class="primary" scope="col">Date</th>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Department</th>
                            <th scope="col">Name</th>
                            <th scope="col">Leave Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                $db_select = "SELECT * from leaverequest where user_name='$u_name'";
                $result = $dbconnection->query($db_select);
                if($result->num_rows>0){
                    while ($row = $result->fetch_assoc()){
                    
                        $leave_date = $row['leave_date'];
                        $employ_id =$row['employee_id'];
                        $depart = $row['department'];
                        $name = $row['employee_name'];
                        $status=$row['status'];
                        $remarks = $row['remarks'];
                        $leave_type = $row['leave_type'];
                        

                        echo "
                        <tr>
                        <td>$leave_date</td>
                        <td>$employ_id</td>
                        <td>$depart</td>
                        <td>$name</td>
                        <td>$leave_type</td>
                        <td>$status</td>
                        <td>$remarks</td>
                      </tr>";
                    }
                }
                
                ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
