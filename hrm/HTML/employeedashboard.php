<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
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
            <!-- <a href="main.php">
                    <div class="tab"><img src="../assets/logout.png" alt="">
                        <h5>Logout</h5>
                    </div>
                </a> -->
                
                <div class="tab2"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div>

            
            <!-- <h2>Quinate Creations</h2> -->

            <!-- <div class="tabs">
                <a href="dashboard.php"><div class="tab active"><img src="../assets/dashboard.png" alt=""> <h5>Dashboard</h5></div></a>
                <a href="empreg.php"><div class="tab"><img src="../assets/employeeAdd.png" alt=""> <h5>Create Employee</h5></div></a>
                <a href=""><div class="tab"><img src="../assets/employeedetaiils.png" alt=""> <h5>Employee Details</h5></div></a>
                <a href=""><div class="tab"><img src="../assets/leave.png" alt=""> <h5>Leave Request</h5></div></a>
                <a href=""><div class="tab"><img src="../assets/logout.png" alt=""> <h5>Logout</h5></div></a>

            </div> -->
            
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
                <!-- <h1>Dashboard</h1> -->
                <br>
                <h1 style="text-align:center">
                Employee Logged in Successfully!!! <br>  
                In progress!!!
                </h1>
            </div>
        </div>
        
    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>
</html>