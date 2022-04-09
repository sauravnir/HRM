<?php include('../PHP/connection.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payroll</title>
    <link rel="stylesheet" href="../CSS/addpayroll.css">
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
                  <a href="">
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
                $name = $_REQUEST["name"];
                $bankacc = $_REQUEST['bankaccount'];
                $contact = $_REQUEST['contact'];
                $sql_query = "Select bank_account from admin";      //acessing from sql
                $result = $dbconnection -> query($sql_query);
                $admin_data = mysqli_fetch_array($result);
                $admin_bank = $admin_data['bank_account'];
          ?>  

              <form action="" method='post'>
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
                    <input name='amount' type="number" required>
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
                    <input name='paymentMethod' value="Online" type="text" required>
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
                    
               <input type="submit" class="table" name="makePayment" value="Make Payment" style="background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;"><form>
                        
                    <!-- <form action="addpayroll.php" method='post'>
                    <input value="Make Payment" name="makePayment" type='button'> 
                    </form> -->
                   
                  <!-- <button onclick="payroll()"name="makePayment">Make Payment</button> -->
        <button onclick='window.location.href="../HTML/dashboard.php"'>Cancel</button>                   
                  </div>
                </div> 
                <?php
              include('../PHP/connection.php');
            if(isset($_POST['makePayment'])){
              if(!empty($_POST['amount']) && !empty($_POST['paymentDate']) && !empty($_POST['paymentDetails']) && !empty($_POST['paymentMethod'])){
                $amount =$_POST['amount'];
                $pay_date =$_POST['paymentDate'];
                $pay_details = $_POST['paymentDetails'];
                $payment_method  = $_POST['paymentMethod'];
                $bankacc = $_REQUEST['bankaccount'];
                echo $bankacc;
                echo $contact;
                $contact = $_REQUEST['contact'];
                $data_select = "SELECT amount,payment_date,payment_method,payment_details from employee WHERE bankAcc='$bankacc' and contact ='$contact'";
                $result = $dbconnection->query($data_select);
                var_dump($result);
                $row = mysqli_fetch_array($result);
                $update_data ="UPDATE employee SET amount='$amount' and payment_date='$pay_date' and payment_method ='$payment_method' and payment_details='$pay_details' and status ='Paid' ";
                $result1=$dbconnection -> query($update_data);
                
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
