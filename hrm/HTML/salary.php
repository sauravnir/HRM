<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
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

                <div class="tab1">
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
                            <th>Bank Account</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <button id='print' onclick="printT()">Print</button>

                        <?php
                    session_start();

        
                    

                    
                        $employid = $_REQUEST['employee'];
                        $name = $_REQUEST["forename"];
                        $paym_date = $_REQUEST['payDate'];
                        $paym_details = $_REQUEST["payDetails"];
                        $status = $_REQUEST["status"];
                        $amount = $_REQUEST["amount"];
                        $bank_acc = $_REQUEST["bankacc"];
                        $contact = $_REQUEST['contact'];
                    echo "<tr>
                    <td data-label='Employee Id'>$employid</td>
                    <td data-label='Name'>$name</td>
                    <td data-label=Payment Date'>$paym_date</td>
                    <td data-label='Payment Details'>$paym_details</td>
                    <td data-label='Bank Account'>$bank_acc</td>
                    <td data-label='Status'><span class='text_open'> $status </span></td>
                    <td data-label='Amount'>$amount</td>";?>
                        <td>
                            <form method='post'>
                                <input class='btn' name='delete' value='Add Payroll'
                                    onclick="location.href='addpayroll.php?forename=<?php echo $name?>&bankacc=<?php  echo $bank_acc?>&contact=<?php echo $contact?>'"
                                    style='background-color:green; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'>

                                <form>
                        </td>
                        <?php echo"</tr>"; ?>
                    </tbody>
                </table>
                <input class='btn' name='exit' value='Exit'
                                    onclick="location.href='dashboard.php'"
                                    style='background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'>

            </div>
        </div>


    </div>
    <script src="../JS/nav-bar.js"></script>
    <script src="../JS/dashboard.js"></script>
</body>

</html>
