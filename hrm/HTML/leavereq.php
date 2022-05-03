<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <a href="">
                    <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>My Details</h5>
                    </div>
                </a>
                <a href="salarysheet.php">
                    <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Salary Sheet</h5>
                    </div>
                </a>
                <a>
                    <div id="dropdown-parent" class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave</h5>
                        <img id="dropdown-btn" style="position:absolute; right:0; cursor:pointer" src="../assets/down.png" alt="">
                    </div>

                    <div class="dropdown-wrapper">
                        <a class="dropdown-href" href="leavereq.php">
                            <div class="tab active"><img src="../assets/leave.png" alt="">
                                    <h5>Leave Request</h5>
                                </div>
                        </a>
                        
                        <a class="dropdown-href" href="levstatus.php">
                            <div class="tab"><img src="../assets/leave.png" alt="">
                                    <h5>Leave Status</h5>
                                </div>
                        </a>
                    </div>
                </a>

                <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
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
                    <h6 class="prf-username"><?php 
                    session_start();
                    $u_name = $_SESSION['employee_name'] ;
                    echo $u_name?></h6>
                </div>
            </div>
            
            <div class="dashboard-content">
                <h1>Leave Request</h1>
                <br>
                <hr style="height:6px; width:70%; background-color:blue; border:0; margin-bottom:30px " >
                <br>

                <form action="">

                <div class="row">
                    <div class="leftLabel">
                        <h4>Leave Type</h4>
                        <h4>:</h4>
                    </div>
                    <div class="right">
                        <input type="text"> 
                    </div>          
                </div>

                <div class="row">
                    <div class="leftLabel">
                        <h4>Date</h4>
                        <h4>:</h4>
                    </div>
                    <div class="right">
                        <input type="text"> 
                    </div>          
                </div>

                <div class="row">
                    <div class="leftLabel">
                        <h4>Reason</h4>
                        <h4>:</h4>
                    </div>
                    <div class="right">
                        <textarea name="" id="" cols="50" rows="10"></textarea>
                    </div>          
                </div>

                <div class="btn-container">
                        <button>Cancel</button>
                        <button>Submit</button>
                    </div>  
                
</form>



                

            </div>
        </div>
        
    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>
</html>