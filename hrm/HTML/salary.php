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
                    <div class="dropdown">
                        <button class="dropbtn" >Admin</button>
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

            <div class="dashboard-content">
                <h1 class="ContentTitle">Employee Details</h1><br><br>
            </div>
            <style>
                @media print{
                    body *{
                        visibility:hidden;
                    }
                    .table-container, .table-container *{
                        visibility:visible;
                    }
                }
            </style>

        
            <div class="table-container">
                <h1 class="heading">Salary Sheet </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Payment Date</th>
                            <th>Payment Details</th>
                            <th>Payment Method</th>
                            <th>Bank Account</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    
                        <button id='print' onclick="window.print()">Print</button>
                        <?php
                        // session_start();
                        include ("../PHP/connection.php");
                        
                        $employid = $_REQUEST['employee'];
                        // echo $employid;
                        $db_select ="SELECT * from salary where employee_id = '$employid'";
                        $result = $dbconnection -> query($db_select);
                        if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()){

                                $employid = $row['employee_id'];
                                $name = $row['employee_name'];
                                $bank_acc = $row['bankAcc'];
                                $paym_date = $row['payment_date'];
                                // $paym_date = $_REQUEST['payDate'];
                                $paym_details = $row["payment_details"];
                                $status = $row["status"];
                                $amount = $row["amount"];
                                // $bank_acc = $row['bankAcc'];
                                $contact = $row['contact'];
                                $paym_method = $row['payment_method'];
                                $user_name = $row['user_name'];
                                // echo $user_name;
                                
                        // echo $paym_method;

                                echo "<tr>
                                <td data-label='Employee Id'>$employid</td>
                                <td data-label='Name'>$name</td>
                                <td data-label=Payment Date'>$paym_date</td>
                                <td data-label='Payment Details'>$paym_details</td>
                                <td data-label='Payment Details'>$paym_method</td>
                                <td data-label='Bank Account'>$bank_acc</td>
                                <td data-label='Status'><span class='text_open'> $status </span></td>
                                <td data-label='Amount'>$amount</td>";
                            }
                        }
                    ?>
                        <td>
                            <form method='post'>
                                <input class='btn' name='delete' value='Add Payroll'
                                    onclick="location.href='addpayroll.php?&emplyID=<?php echo $employid?>&forename=<?php echo $name?>&bankacc=<?php  echo $bank_acc?>&contact=<?php echo $contact?>&username=<?php echo $user_name?>'" style='background-color:green; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'>
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
