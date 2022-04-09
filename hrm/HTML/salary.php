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
                        <button id='print'  onclick="printT()">Print</button>
                    
                    <?php
                    session_start();

                    // $name = $_SESSION['full_name'];
                    // $employ_id = $_SESSION['employee_id'];
                    // $pay_date = $_SESSION['payment_date'];
                    // $pay_details=$_SESSION['payment_details'];
                    // $status =$_SESSION['status'];
                    // $amount = $_SESSION['amount'];
                    // $bank_acc = $_SESSION['bankAcc'];
                    

                    // if (isset($_REQUEST)) {
                        $employ_id = $_REQUEST["employID"];
                        $name = $_REQUEST["forename"];
                        $paydate = $_REQUEST["payDate"];
                        $paydetails = $_REQUEST["payDetails"];
                        $status = $_REQUEST["status"];
                        $amount = $_REQUEST["amount"];
                        $bankacc = $_REQUEST["bankacc"];
                        $contact = $_REQUEST['contact'];
                    // }

                    echo "<tr>
                    <td data-label='Employee Id'>$employ_id</td>
                    <td data-label='Name'>$name</td>
                    <td data-label=Payment Date'>$paydate</td>
                    <td data-label='Payment Details'>$paydetails</td>
                    <td data-label='Bank Account'>$bankacc</td>
                    <td data-label='Status'><span class='text_open'> $status </span></td>
                    <td data-label='Amount'>$amount</td>";?>
                    <td>
                        <form method='post'>
                            <input class='btn' name='delete' value='Add Payroll' onclick="location.href='addpayroll.php?name=<?php echo $name?>&bankaccount=<?php  echo $bankacc?>&contact=<?php echo $contact?>'" style='background-color:green; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'>
                        <form>
                    </td>
                    <?php echo"</tr>"; ?>
                    </tbody>

                </table>
                <button id='back' onclick="window.location.href='salary.php'">Back</button>
            </div>
        </div>

    </div>
    <script src="../JS/nav-bar.js"></script>
    <script src="../JS/dashboard.js"></script>
</body>

<!-- // <td data-label='Name'>$name</td>
                    // <td data-label=Payment Date'>$paydate</td>
                    // <td data-label='Payment Details'>$paydetails</td>
                    // <td data-label='Bank Account'>$bankacc</td>
                    // <td data-label='Status'><span class='text_open'> $status </span></td>
                    // <td data-label='Amount'>$amount</td>
                    // <td data-label='Actions'> <a href='addpayroll.php' class='btn'>Add Payroll</a></td> -->
                    <!-- <td data-label='Actions'> <a href='addpayroll.php' class='btn'>Add Payroll</a></td>/ -->
</html>

