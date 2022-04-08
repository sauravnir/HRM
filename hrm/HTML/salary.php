<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
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
                    <div class="tab active  "><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Employee Details</h5>
                    </div>
                </a>
                <a href="leave.php">
                    <div class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
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
                    <h6 class="prf-username">Admin</h6>
                </div>
            </div>

            <div class="dashboard-content">
            <h1 class="ContentTitle">Employee Details</h1><br><br>
            </div>
            <div class="table-container">
                <h1 class="heading">Salary Sheet </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Payment Date</th>
                            <th>Payment Details</th>
                            <th>Transaction Id</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <button>Print</button>
                        <tr>
                            <td data-label="Employee Id">20101</td>
                            <td data-label="Name">Biwas Pudasaini</td>
                            <td data-label="Payment Date">3/29/2022</td>
                            <td data-label="Payment Details">March Payroll</td>
                            <td data-label="Transaction Id">1234567899876543</td>
                            <td data-label="Status"><span class="text_open"> [Paid/Pending] </span></td>
                            <td data-label="Amount">30000</td>
                            <td data-label="Actions"> <a href="#"class="btn">Add Payroll</a></td>
</tr>                   
                    </tbody>
                </table>
                <button>Back</button>
            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
</body>

</html>