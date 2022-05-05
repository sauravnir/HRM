<?php    include('../PHP/connection.php'); 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/leavereq.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
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
                            <div class="tab active1"><img src="../assets/leave.png" alt="">
                                <h5>Request a Leave</h5>
                            </div>
                        </a>

                        <a class="dropdown-href" href="levstatus.php">
                            <div class="tab"><img src="../assets/leave.png" alt="">
                                <h5>Leave Status</h5>
                            </div>
                        </a>
                    </div>
                </a>
                <!-- 
                <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div> -->

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
                <h1>Request a Leave</h1>

                <br>
                <hr style="height:6px; width:70%; background-color:blue; border:0; margin-bottom:30px ">
                <br>

                <form action="../PHP/leavingreq.php" method="post">

                    <?php
                
                $db_select = "SELECT * from employee where user_name='$u_name'";
                $result = $dbconnection->query($db_select);
                if($result->num_rows>0){
                    while ($row = $result->fetch_assoc()){
                    $employee_id = $row['employee_id'];
                    
                    $depart = $row['department'];

                    $name = $row['first_name']." ".$row['last_name'];;
                        
                    }}

                ?>
                    <div class="row">
                        <div class="leftLabel">
                            <h4>Employee Name:</h4>

                        </div>

                        <div class="right">
                            <input type="text" name="name" value="<?= $name?>" readonly='readonly'>
                        </div>
                    </div>



                    <div class="row">
                        <div class="leftLabel">
                            <h4>Employee ID:</h4>

                        </div>

                        <div class="right">
                            <input type="text" name="employee_id" value="<?= $employee_id?>" readonly='readonly'>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Department:</h4>

                        </div>

                        <div class="right">
                            <input type="text" name="department" value="<?= $depart?>" readonly='readonly'>
                        </div>
                    </div>


                    <div class="row">
                        <div class="leftLabel">
                            <h4>Leave Type:</h4>

                        </div>
                        <div class="right">
                            <input type="text" name="leavetype" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Date:</h4>

                        </div>
                        <div class="right">
                            <input type="date" name="leavedate" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Reason:</h4>

                        </div>
                        <div class="right">
                            <textarea name="reason" id="" cols="50" rows="10" required></textarea>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input class="table1" type="submit" name="submit" value="Submit"
                            style="background-color:#04AA6D; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;">

                    </div>
                </form>
                <input onclick="location.href='employeedashboard.php'" class="table1" type="submit" name="cancel"
                    value="Cancel"
                    style="background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer; margin-left:483px;display:relative;">

            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
