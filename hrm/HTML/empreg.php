<?php  include('../PHP/connection.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Employee</title>
  <link rel="stylesheet" href="../CSS/dashboard.css">
  
</head>

<body>
  <div class="main">
    <div class="leftSidebar">
      <div class="logo-ctn">
        <img src="../assets/logo.png" alt="">
        <h3>Quinate Creations</h3>
      </div>
      <!-- <h2>Quinates Creations</h2> -->

      <div class="tabs">
        <a href="dashboard.php">
          <div class="tab"><img src="../assets/dashboard.png" alt="">
            <h5>Dashboard</h5>
          </div>
        </a>
        <a href="empreg.php">
          <div class="tab active" style=""><img src="../assets/employeeAdd.png" alt="">
            <h5 >Create Employee</h5>
          </div>
        </a>
        <a href="details.php">
          <div class="tab"><img src="../assets/employeedetaiils.png" alt="">
            <h5>Employee Details</h5>
          </div>
        </a>
        <a href="leave.php">
          <div class="tab"><img src="../assets/leave.png" alt="">
            <h5>Leave Request</h5>
          </div>
        </a>
        

        <!-- not working!!!!!!!!! -->
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



      <div class="create-content">
      <h1 class="ContentTitle">Create Employee</h1>
        <br>
        <div class="form_wrapper">
          <div class="form_container">

            <div class="row clearfix">
              <div class="">


                <form action="../PHP/registration.php" method="post">
                  <div class="container">
                   <b>
                    <label style>Firstname: </label>
                    <input type="text" name="firstname" placeholder="Firstname" size="15" required />
                    <label> Lastname: </label>
                    <input type="text" name="lastname" placeholder="Lastname" size="15" required />
                    <label> Username: </label>
                    <input type="text" name="username" placeholder="Username" size="15" required />
                    <div>
                      <label> Designation: </label>
                      <input type="text" name="designation" placeholder="Designation" size="15" required />

                    </div>
                    <label> Department: </label>
                    <input type="text" name="department" placeholder="Department" size="15" required />

                    <label for=""> Employee ID: </label>
                    <input type="text" name="employeeid" placeholder="Employee-Id" size="15" required />

                    <label>Transaction Id:</label>
                    <input type="text" name="transid" placeholder="eg. 145467321456733" size="15" required>
                    
                    <div>
                      <label>Contact :</label>
                      <input type="text" name="contact" placeholder="Contact"required />
                    </div>

                    <label for="email">Email:</label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw">Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <label for="psw-repeat">Confirm Password:</label>
                    <input type="password" placeholder="Confirm Password" name="confirmpsw" required>

                    <label for="IssuedDate">Issued Date:</label>
                    <input type="date" placeholder="Issued Date" name="issuedDate" required>

                    <div class="input_field radio_option">

                      <input type="radio" name="radiogroup1" id="rd1" value="Male">
                      <label for="rd1">Male</label>
                      <input type="radio" name="radiogroup1" id="rd2" value="Female">
                      <label for="rd2">Female</label>
                    </div>

                    </b>
                    
                    <input id="submitbtn" class="button" type="submit" value="Submit" name="submit" />

                </form>
                <button type="submit" class="cancelbtn" name="submit"
                  onclick="window.location.href='../HTML/dashboard.php'">Cancel</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  

  <script src="../JS/dashboard.js"></script>
  <script src="../JS/nav-bar.js"></script>
</body>

</html>
