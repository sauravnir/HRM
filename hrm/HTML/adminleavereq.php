<?php 
session_start();
if(empty($_SESSION['adminLoggedIn']) || $_SESSION['adminLoggedIn'] == ''){
    header("Location: main.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Requests</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/leavereq.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
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
                <a href="dashboard.php">
                    <div class="tab "><img src="../assets/dashboard.png" alt="">
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

                <!-- <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div> -->

            </div>
        </div>
        <div class="main-container">
            <div class="top-bar">
                <!-- Toggle Sidebar -->
                <button id="toggle" class="circle"></button>
                <!-- Account Profile Container -->
                <div class="prf-container">
                    <div class="prf-circle">
                        <img src="../assets/pp.png" alt="" onclick>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Admin</button>
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

            <!-- Adding carousal in dashboard -->
            <div class="dashboard-content">
                <h1>Leave Request</h1>

                <br>
                <h1 class="heading">Leave Details</h1>
                <!-- <hr style="height:6px; width:70%; background-color:blue; border:0; margin-bottom:30px "> -->

                <br>
                <form action="../PHP/adminleave.php" method="post">

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Employee ID</h4>
                            <h4>:</h4>
                        </div>

                        <div class="right">
                            <input type="text" name="employee_id" value="<?=$employ_id = $_REQUEST['employid'];?>"
                                readonly='readonly'>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Department</h4>
                            <h4>:</h4>
                        </div>

                        <div class="right">
                            <input type="text" name="department" value="<?= $depart= $_REQUEST['department']?>"
                                readonly='readonly'>
                        </div>
                    </div>


                    <div class="row">
                        <div class="leftLabel">
                            <h4>Leave Type</h4>
                            <h4>:</h4>
                        </div>
                        <div class="right">
                            <input type="text" name="leavetype" value="<?= $leave_type=$_REQUEST['leavetype']?>"
                                readonly='readonly'>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Date</h4>
                            <h4>:</h4>
                        </div>
                        <div class="right">
                            <input type="date" name="leavedate" value="<?= $date = $_REQUEST['leavedate']?>"
                                readonly='readonly'>
                        </div>
                    </div>

                    <div class="row">
                        <div class="leftLabel">
                            <h4>Reason</h4>
                            <h4>:</h4>
                        </div>
                        <div class="right">
                            <textarea name="reason" id="" cols="50" rows="10"
                                readonly='readonly'><?= $reason = $_REQUEST['reason'] ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="leftLabel">
                            <h4>Remarks</h4>
                            <h4>:</h4>
                        </div>
                        <div class="right">
                            <textarea type="text" name="remarks" required></textarea>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input class="table1" type="submit" name="approve" value="Approve"
                            style="background-color:green; text-align:center; width:200px;color:white; padding:5px; cursor:pointer; margin-left:383px;">
                        <input class="table1" type="submit" name="discard" value="Deny"
                            style="background-color:red; text-align:center; width:200px;color:white; padding:5px; cursor:pointer;">

                    </div>

                </form>



            </div>
        </div>

    </div>
    </div>
    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
