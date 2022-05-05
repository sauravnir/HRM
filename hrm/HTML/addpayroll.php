<?php include('../PHP/connection.php');  ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Payroll</title>
  <link rel="stylesheet" href="../CSS/addpayroll.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <div class="tab"> 
              <!-- <h5>Logout</h5> -->
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
            <img src="../assets/pp.png" alt="">
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

      <!-- <div class="dashboard-content">
                <h1 class="ContentTitle">Add Payroll</h1>
                <br>
                <p>
                    Working...
                </p>
            </div>
        </div> -->
      <div class="dashboard-content">

        <h1 class="ContentTitle">Add Payroll:</h1>
        <hr>
        <br>

        <?php
            
                $employ_id = $_REQUEST['emplyID'];     
                $name = $_REQUEST["forename"];
                $bankacc = $_REQUEST['bankacc'];
                $contact = $_REQUEST['contact'];
                $user_name = $_REQUEST['username'];
                //creating a session variable  
                $sql_query = "Select bank_account from admin";      //acessing from sql
                $result = $dbconnection -> query($sql_query);
                $admin_data = mysqli_fetch_array($result);
                $admin_bank = $admin_data['bank_account'];
          ?>

        <form action="../PHP/addingPayroll.php" method='post'>
          <div class="addpay-ctn">
            <h2>Create Transaction</h2>
            <hr>
            <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Sender Details</h3>

            <div class="input-row">
              <div class="input-ctn">
                <label for="">Bank Account</label><br>
                <input type="text" value="<?= $admin_bank ?>" readonly='readonly'>
              </div>
              <div class="input-ctn">

                <label for="">Amount</label><br>
                <input name='amount' type="number" placeholder="Rs." required>
              </div>
              <div class="input-ctn">
                <label for="">Payment Date</label><br>
                <input name='paymentDate' type="date" required>
              </div>
            </div>

            <div class="input-row">
              <div class="input-ctn pay-dates">
                <div>
                  <!-- <label for="">From</label><br> -->
                  <!-- <input type="date"> -->
                </div>

                <div>
                  <!-- <label for="">To</label><br> -->
                  <!-- <input type="date"> -->
                </div>
              </div>

              <div class="input-ctn">
                <label for="">Payment Method</label><br>
                <input name='paymentMethod' value="" placeholder='Online/Cash' type="text" required>
              </div>
              <div class="input-ctn">
                <label for="">Payment Detail</label><br>
                <input name='paymentDetails' type="text" placeholder='Salary' required>
              </div>
            </div>

            <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Beneficiary Details</h3>
            <div class="input-row">
              <div class="input-ctn">
                <label for="">Name</label><br>
                <input name="employee_name" type="text" value='<?= $name ?>' readonly='readonly'>
              </div>
              <div class="input-ctn">
                <label for="">Bank Account</label><br>
                <input name="bankacc" name="bank_account" type="text" value='<?= $bankacc?>' readonly='readonly'>
              </div>
              <div class="input-ctn">
                <label for="">Identifier/ Mobile Number</label><br>
                <input type="text" name="contact" value='<?= $contact?>' readonly='readonly'>
              </div>

              <div class="input-ctn">
                <label for="">Employee Id</label><br>
                <input type="text" name="employee_id" value='<?= $employ_id?>' readonly='readonly'>
              </div>
              <div class="input-ctn">
                <label for="">User Name</label><br>
                <input type="text" name="user_name" value='<?= $user_name?>' readonly='readonly'>
              </div>
            </div>
          </div>

          <div class="input-row">
            <div class="btn-ctn">
              <input class="table" type="submit" name="makePayment" value="Make Payment"
                style="background-color:green; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;">
              <form>

                <!-- <form action="addpayroll.php" method='post'>
                    <input value="Make Payment" name="makePayment" type='button'> 
                    </form> -->

                <!-- <button onclick="payroll()"name="makePayment">Make Payment</button> -->
                <input class='btn' name='exit' value='Exit' onclick="location.href='dashboard.php'"
                  style='background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'>
                <!-- <input  style="background-color:grey" class='table' type="button" value="Back" onclick="window.location.href='salary.php'">                   -->
            </div>
          </div>


      </div>
    </div>
    </form>


  </div>
  <script src="../JS/nav-bar.js"></script>
  <script src="../JS/dashboard.js"></script>
</body>

</html>
