<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payroll</title>
    <link rel="stylesheet" href="../CSS/addpayroll.css">
    
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
                  <a href="">
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

              <div class="addpay-ctn">
                <h2>Create Transaction</h2>
                <hr>
                <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Sender Details</h3>
                <div class="input-row">
                  <div class="input-ctn">
                    <label for="">Bank Account</label><br>
                    <input type="text">
                  </div>
                  <div class="input-ctn">
                    <label for="">Amount</label><br>
                    <input type="number">
                  </div>
                  <div class="input-ctn">
                    <label for="">Payment Date</label><br>
                    <input type="date">
                  </div>
                </div>

                <div class="input-row">
                  <div class="input-ctn pay-dates">
                    <div>
                      <label for="">From</label><br>
                      <input type="date">
                    </div>
                    
                    <div>
                      <label for="">To</label><br>
                      <input type="date">
                    </div>
                  </div>
              
                  <div class="input-ctn">
                    <label for="">Payment Method</label><br>
                    <input type="text">
                  </div>
                  <div class="input-ctn">
                    <label for="">Transaction Detail</label><br>
                    <input type="text">
                  </div>
                </div>

                <h3 style="margin-top: 10px; font-size: 18px; font-weight: 600;">Beneficiary Details</h3>
                <div class="input-row">
                  <div class="input-ctn">
                    <label for="">Name</label><br>
                    <input type="text">
                  </div>
                  <div class="input-ctn">
                    <label for="">Bank Account</label><br>
                    <input type="text">
                  </div>
                  <div class="input-ctn">
                    <label for="">Identifier/ Mobile Number</label><br>
                    <input type="text">
                  </div>
                </div>
                <div class="input-row">
                  <div class="btn-ctn">
                    <button>Cancel</button>
                    <button>Make Payment</button>
                  </div>
                </div>
                
              </div>
        </div>
        
    </div>
    <script src="../JS/nav-bar.js"></script>
</body>
</html>