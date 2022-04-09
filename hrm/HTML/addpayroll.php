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
                    <h6 class="prf-username">Admin</h6>
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
                
                $name = $_REQUEST["forename"];
                $bankacc = $_REQUEST['bankacc'];
                $contact = $_REQUEST['contact'];
                $sql_query = "Select bank_account from admin";      //acessing from sql
                $result = $dbconnection -> query($sql_query);
                $admin_data = mysqli_fetch_array($result);
                $admin_bank = $admin_data['bank_account'];
          ?>  

              <form action="addpayroll.php" method='post'>
              <div class="addpay-ctn">
                <h2>Create Transaction</h2>
                <hr>
                <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Sender Details</h3>
                <div class="input-row">
                  <div class="input-ctn">
                    <label for="">Bank Account</label><br>
                    <input type="text" value="<?= $admin_bank ?>">
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
                    <input name='paymentMethod' value="" placeholder='Online/Cash' type="text" required >
                  </div>
                  <div class="input-ctn">
                    <label for="">Payment Detail</label><br>
                    <input name='paymentDetails' type="text" required>
                  </div>
                </div>

                <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Beneficiary Details</h3>
                <div class="input-row">
                  <div class="input-ctn">
                    <label for="">Name</label><br>
                    <input type="text" value = '<?= $name ?>'>
                  </div>
                  <div class="input-ctn">
                    <label for="">Bank Account</label><br>
                    <input type="text" value='<?= $bankacc?>'>
                  </div>
                  <div class="input-ctn">
                    <label for="">Identifier/ Mobile Number</label><br>
                    <input type="text" value='<?= $contact?>'>
                  </div>
                </div>
                <div class="input-row">
                  <div class="btn-ctn">
                    
               <input type="submit" onclick="addingPayroll()" class="table" name="makePayment" value="Make Payment" style="background-color:green; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;"><form>
                        
                    <!-- <form action="addpayroll.php" method='post'>
                    <input value="Make Payment" name="makePayment" type='button'> 
                    </form> -->
                   
                  <!-- <button onclick="payroll()"name="makePayment">Make Payment</button> -->
                  <input class='btn' name='exit' value='Exit'
                                    onclick="location.href='dashboard.php'"
                                    style='background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;size:50px'> 
        <!-- <input  style="background-color:grey" class='table' type="button" value="Back" onclick="window.location.href='salary.php'">                   -->
                  </div>
                </div> 

                  <?php
      
                      if(isset($_POST['makePayment'])){
                        if(!empty($_POST['amount']) && !empty($_POST['paymentDate']) && !empty($_POST['paymentDetails']) && !empty($_POST['paymentMethod'])){

                          $amount =$_POST['amount'];
                          $pay_date =$_POST['paymentDate'];
                          $pay_details = $_POST['paymentDetails'];
                          $payment_method  = $_POST['paymentMethod'];
                          $bankacc = $_REQUEST['bankaccount'];

              
                          $data_select = "SELECT amount,payment_date,payment_method,payment_details from employee WHERE bankAcc='$bankacc'";
                          $result = $dbconnection->query($data_select);
                      
                          $row = mysqli_fetch_array($result);
                          $update_data ="UPDATE employee SET amount='$amount'";
                          $result1=$dbconnection -> query($update_data);
                          $update_data1 ="UPDATE employee SET payment_date='$pay_date'";
                          $result2=$dbconnection -> query($update_data1);
                          $update_data2 ="UPDATE employee SET payment_method='$payment_method'";
                          $result3=$dbconnection -> query($update_data2);
                          $update_data3 ="UPDATE employee SET payment_details='$pay_details'";
                          $result4=$dbconnection -> query($update_data3);
                          $update_data4 ="UPDATE employee SET status='Paid'";
                          $result5=$dbconnection -> query($update_data4);

                          echo'<script>
                          alert("You have successfully added payroll!!");
                          window.location.href="dashboard.php";
                          </script>';
                          // header('Location:dashboard.php');
  }else{
  }
  
}
?>
              </div>
        </div>
        </form>
          
        
    </div>
    <script src="../JS/nav-bar.js"></script>
    <script src="../JS/dashboard.js"></script>
</body>
</html>