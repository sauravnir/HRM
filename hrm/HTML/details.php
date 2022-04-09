<?php include_once("../PHP/connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
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
                
                <div class="tab1">                    <!-- <button id="logout" onclick="logOut()">Logout</button> -->
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
                <h1 class="heading">Employee List</h1>
                <table class="table">
                    <thead>
                        <tr class="columns">
                            <th name="i.d.">S.N.</th>
                            <th name="department">Department</th>
                            <th name="name">Names</th>
                            <th name="info">Information</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                session_start();

        // $test = $_SESSION['id'];
        // $db_select ="SELECT id,first_name,last_name,department from employee";
        $db_select ="SELECT * from employee";
        $result = $dbconnection -> query($db_select);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $s_num = $row['id'];
        
        $depart = $row['department'];
          
        $f_name = $row['first_name'];
        
        $l_name = $row['last_name'];
        
        $name = $row['first_name']." ".$row['last_name'];;

        $employ_id = $row['employee_id'];

        $pay_date = $row['payment_date'];

        $pay_details=$row['payment_details'];

        $status = $row['status'];

        $amount = $row['amount'];

        $bank_acc=$row['bankAcc'];  

        $contact = $row['contact'];
       
        $gender =$row['gender'];
        
        $issued_date=$row['issued_date'];

        $email=$row['email'];

        $designation=$row['designation'];

        $user_name=$row['user_name'];
        //defining session variable
        // $_SESSION['employee_id'] =$employ_id;
        // $_SESSION['payment_date']=$pay_date;
        // $_SESSION['payment_details']=$pay_details;
        // $_SESSION['status']=$status;
        // $_SESSION['amount']=$amount;
        // $_SESSION['bankAcc'] =$bank_acc;


        // Defining session variables
        // $_SESSION['id']=$s_num;
        // $_SESSION['department']=$depart;  
        // $_SESSION['last_name']=$l_name;
        // $_SESSION['full_name']=$name; 
        // $_SESSION['first_name']=$f_name;
        

        echo "
        <tr class='columns'>
                            <td> $s_num </td>
                            <td> $depart</td>
                            <td> $name </td>"; ?>
                            <td><form method="post">
                            <!-- <input type="button" value="Details" class="table" style="background-color:#04AA6D;"><a style="color:white;" href="">EDIT ME </a> -->
                            <input class="table" name="details" value="Details" onclick="location.href='employeeInfo.php?employID= <?php echo $employ_id; ?>&forename=<?php echo $name;?>&payDate=<?php echo $pay_date;?>&payDetails=<?php echo $pay_details;?>&status=<?php echo $status;?>&amount=<?php echo $amount;?>&bankacc=<?php echo $bank_acc;?>&contact=<?php echo $contact?>&gender=<?php echo $gender?>&username=<?php echo $user_name?>&designation=<?php echo $designation?>&email=<?php echo $email?>&issued_date=<?php echo $issued_date?>&department=<?php echo $depart?>'" style="background-color:#04AA6D; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;">    
                            <form method="post"><input type="submit" class="table" name="delete" value="Delete" style="background-color:red; text-align:center; width:100px;color:white; padding:5px; cursor:pointer;"><form>
                        </form></td>
                            <?php
                                // <td><form method="post">
                                // <a href="salary.php?ida=echo '$s_num'">
                                // </form>
                                // <form method="post"><input type="submit" class="table" name="delete" value="Delete" style="background-color:red"><form></td>
                            echo '</tr>';

                        // <input type="submit" class="table" name="details" value="Details" onclick="location.href=./salary.php" style="background-color:#04AA6D">

                        
                        // if(isset($_POST['details'])){
                        //     // $_SESSION['employee_id'] =$employ_id;
                        //     // $_SESSION['payment_date']=$pay_date;
                        //     // $_SESSION['payment_details']=$pay_details;
                        //     // $_SESSION['status']=$status;
                        //     // $_SESSION['amount']=$amount;
                        //     // $_SESSION['bankAcc'] =$bank_acc;
                        //     // echo $bank_acc;
                        //     // header("Location:../HTML/salary.php?ida=$s_num");
                        // }


                        if(isset($_POST['delete'])){
    
                            echo '<script>
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You wont be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Yes, delete it!"
                              }).then((result) => {
                                if (result.isConfirmed) {
                                window.location.href="../PHP/deleting.php";
                                }
                              })
                            // </script>';
                            
                        }
}
}
?>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
</body>
</html>
