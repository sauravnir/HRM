<?php include ('../PHP/connection.php');?>
<?php 
session_start();
if(empty($_SESSION['employeeLoggedIn']) || $_SESSION['employeeLoggedIn'] == ''){
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
    <title>My Details</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
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
                <a href="employeedashboard.php">
                    <div class="tab "><img src="../assets/dashboard.png" alt="">
                        <h5>Dashboard</h5>
                    </div>
                </a>
                <a href="mydetails.php">
                    <div class="tab active"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>My Details</h5>
                    </div>
                </a>
                <a href="salarysheet.php">
                    <div class="tab"><img src="../assets/salary.png" alt="">
                        <h5>Salary Sheet</h5>
                    </div>
                </a>
                <a>
                    <div id="dropdown-parent" class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave</h5>
                        <img id="dropdown-btn" style="position:absolute; right:0; cursor:pointer" src="../assets/down.png" alt="">
                    </div>

                    <div class="dropdown-wrapper">
                        <a class="dropdown-href" href="leavereq.php">
                            <div class="tab"><img src="../assets/request.png" alt="">
                                    <h5>Request a Leave</h5>
                                </div>
                        </a>
                        
                        <a class="dropdown-href" href="levstatus.php">
                            <div class="tab"><img src="../assets/leave.png" alt="">
                                    <h5>Leave Status</h5>
                                </div>
                        </a>
                    </div>
                </a>

                <!-- <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div> -->

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
                        <button class="dropbtn" onclick="hoverdown()"><?php 
                    
                    $u_name = $_SESSION['employee_name'];
                    echo $u_name?></button>
                        <!-- <h6 class="prf-username">Admin</h6> -->
                        <div  id="myDropdown" class="dropdown-content">
                        <button id="logout" onclick="logOut()">Logout</button>
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

.dropbtn:hover, .dropbtn:focus {
  /* background-color: #2980B9; */
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
                    </style>

                    <!-- Script for user drop-down -->

<script>
    function hoverdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
                    
                    <!-- <h6 class="prf-username"></h6> -->
                </div>
            </div>

            <div class="dashboard-content">
                <h1 class="ContentTitle">Edit Details</h1><br><br>
            </div>
            <div class="table-container">
            <?php
                $db_select = "SELECT * from employee where user_name='$u_name'";
                $result = $dbconnection->query($db_select);
                if($result->num_rows>0){
                    while ($row = $result->fetch_assoc()){
                        $s_num = $row['id'];
        
                        $depart = $row['department'];
                        
                        $f_name = $row['first_name'];
                        
                        $l_name = $row['last_name'];
                        
                        $name = $row['first_name']." ".$row['last_name'];;

                        $employ_id = $row['employee_id'];

                        $bank_acc=$row['bankAcc'];  

                        $contact = $row['contact'];
                        
                        $gender =$row['gender'];
                        
                        $issued_date=$row['issued_date'];

                        $email=$row['email'];

                        $designation=$row['designation'];
                    }
                }
                
                ?>
                <form action="../PHP/employeedetails.php" method="post">
                <table class="table1">
                    <thead style="">
                        <tr class="columns" >
                           
                            <th name="name">Name:</th>  
                            <th> <?php echo $name?>
                            </th>
                            
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="department">Department:</th>
                            <th> <?php echo $depart ?>

                            </th>
                            
                            
                        </tr>
                        <tr class="columns">
                         
                            <th name="designation">Designation:</th>
                            <th>
                                <?php echo $designation?>
                            </th>
                           
                            
                        </tr>
                        <tr class="columns">
                            
                            <th name="empId">Employee ID:</th>
                            <th>
                                <?php echo $employ_id ?>
                            </th>
                          
                        </tr>
                        <tr class="columns">
                           
                            <th name="email">Email:</th>
                            <th>
                            <input type="text" name="email" style="font-size:18px;font-weight:bold;text-align:center;" value ="<?= $email ?>">
                            </th>
                            
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="contact">Contact:</th>
                            <th>
                            <input type="text"  name="contact" style="font-size:18px;font-weight:bold;text-align:center;" value="<?= $contact?>">
                            </th>
                            
                          
                        </tr>
                        <tr class="columns">
                            
                            <th name="joined_date">Joined Date:</th>
                            <th>
                            <?php echo $issued_date ?>
                            </th>
                           
                           
                        </tr>
                        <tr class="columns">
                            
                            <th name="gender">Gender:</th>
                            <th>
                            <?php echo $gender ?>
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody> 
                    </tbody>
                </table>
                
                <input class="table1" type="submit" name="edit" value="Save" style="background-color:#04AA6D; text-align:center; width:200px;color:white; padding:5px; cursor:pointer;">
            </form>
                <input class="table1" onclick="location.href='employeedashboard.php'" type="submit" name="edit" value="Cancel" style="background-color:red; text-align:center; width:200px;color:white; padding:5px; cursor:pointer;">    
            </div>  
            
        </div>
</div>

          
    <script src="../JS/dashboard.js"></script>
    <script src="../JS/nav-bar.js"></script>
</body>
</html>