<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
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
                    <div class="tab active"><img src="../assets/dashboard.png" alt="">
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
                    <div class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
                    </div>
                </a>
                <a href="main.php">
                    <div class="tab"><img src="../assets/logout.png" alt="">
                        <h5>Logout</h5>
                    </div>
                </a>
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
                    <h6 class="prf-username">Admin</h6>
                </div>
            </div>

            <!-- Adding carousal in dashboard -->
            <div class="dashboard-content">
                <h1 class="ContentTitle">Dashboard</h1>
                <div class="pictures">
                    <img src="../assets/Office.webp" alt="">
                </div>

            </div>
        </div>

    </div>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
