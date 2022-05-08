<?php 
session_start();
if(empty($_SESSION['employeeLoggedIn']) || $_SESSION['employeeLoggedIn'] == ''){
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
            <!-- Tabs for sidebar -->
            <div class="tabs">
                <a href="employeedashboard.php">
                    <div class="tab active"><img src="../assets/dashboard.png" alt="">
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
                    <div id="dropdown-parent" class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave</h5>
                        <img id="dropdown-btn" style="position:absolute; right:0; cursor:pointer" src="../assets/down.png" alt="">
                    </div>

                    <div class="dropdown-wrapper">
                        <a class="dropdown-href" href="leavereq.php">
                            <div class="tab"><img src="../assets/request.png" alt="">
                                    <h5>Request a Leave</h5>
                                </div>
                        </a>
                        
                        <a class="dropdown-href" href="levstatus.php">
                            <div class="tab"><img src="../assets/status.png" alt="">
                                    <h5>Leave Status</h5>
                                </div>
                        </a>
                    </div>
                </a>

                <!-- <div class="tab1"><img src="../assets/logout.png" alt="">
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

                    <h6 class="prf-username"></h6>
                </div>
            </div>
            
            <div class="dashboard-content">
                <h1 class="ContentTitle">Employee Dashboard</h1>
                <div class="pictures">
                    <input type="image" onclick="Clicker()" src="https://image-charts.com/chart?chbr=20&chco=CFECF7%2C27c9c2&chd=a%3A10000%2C50000%2C60000%2C80000%2C40000%7C50000%2C60000%2C100000%2C40000%2C20000&chdl=N%7CN-1&chdlp=r&chl=10%7C50%7C60%7C80%7C40%7C50%7C60%7C100%7C40%7C20&chs=700x450&cht=bvs&chtt=Revenue%20per%20month&chxl=0%3A%7CJan%7CFev%7CMar%7CAvr%7CMay&chxs=1N%2AcUSD0sz%2A%2C000000%2C14&chxt=x%2Cy"
                        alt="" class="pic">
                    <input type="image" onclick="Clicker1()" src="https://image-charts.com/chart?chbr=8&chd=t%3A10%2C15%2C25%2C30%2C40%2C80&chf=b0%2Clg%2C90%2C05B142%2C1%2C0CE858%2C0.2&chl=%7C%7C%7C%7C%2033%25%20%21%7Cx2%20&chma=0%2C0%2C10%2C10&chs=700x450&cht=bvs&chtt=Revenue%20per%20month&chxl=0%3A%7CJan%7CFev%7CMar%7CAvr%7CMay&chxs=1N%2AcUSD0sz%2A%2C000000%2C14&chxt=x%2Cy"
                        alt="" class="pic">
                    <input type="image" onclick="Clicker2()" src="https://image-charts.com/chart?chco=E4061C&chd=t%3A10%2C25%2C30%2C40%2C12%2C48%2C100%2C20%2C47%2C29%2C84%2C30%2C27%2C50%2C70&chl=%7C%7C%7C%7C%7C%7Csuch%20a%20very%20%20%20big%20project%21&chm=B%2CFCECF4%2C0%2C0%2C0&chma=0%2C0%2C20%2C10&chs=700x450&cht=lc&chxl=0%3A%7CJun%7CJul%7CAug%7CSep%7COct%7CNov%7CDec%7CJan%7C1%3A%7C%7C50%7C100&chxt=x%2Cy"
                        alt="" class="pic">
                    <input type="image" onclick="Clicker3()" src="https://image-charts.com/chart?chd=t%3A60%2C40%2C20&chdl=Image%7CCharts%7CRocks&chf=ps0-0%2Clg%2C45%2Cffeb3b%2C0.2%2Cf443367C%2C1%7Cps0-1%2Clg%2C45%2C8bc34a%2C0.2%2C0096887C%2C1%7Cps0-2%2Clg%2C45%2CEA469E%2C0.2%2C03A9F47C%2C1&chl=2018%7C2017%7C2015&chs=700x450&cht=pa&chxt=x%2Cy   "
                        alt="" class="pic"> 
                </div>

            </div>
        </div>

    </div>
        
    </div>
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>
</html>