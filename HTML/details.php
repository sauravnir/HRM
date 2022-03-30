<?php   include_once("../PHP/connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
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
                <a href="main.php">
                    <div class="tab"><img src="../assets/logout.png" alt="">
                        <h5>Logout</h5>
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
                    <h6 class="prf-username"></h6>
                </div>
            </div>

            <div class="dashboard-content">
            <h1 class="ContentTitle">Employee Details</h1><br><br>
            </div>
            <div class="table-container">
                <h1 class="heading">Employee List</h1>
                <table class="table">
                    <thead>
                        <tr class="columns">
                            <th name="i.d.">S.N.</th>
                            <th name="department">Department</th>
                            <th name="name">Names</th>
                            <th name="info">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 


$db_select ="SELECT id,first_name,last_name,department from employee";
$result = $dbconnection -> query($db_select);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $s_num = $row['id'];
        $depart = $row['department'];
        $name = $row['first_name']." ".$row['last_name'];;
         

        echo "
        <tr>
                            <td> $s_num </td>
                            <td> $depart</td>
                            <td> $name </td>
                            <td><button class='table' onclick=window.location.href='#'>Details</button></td>
                        </tr>";
    }
    
}
?>          
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    <script src="../JS/nav-bar.js"></script>
</body>

</html>
