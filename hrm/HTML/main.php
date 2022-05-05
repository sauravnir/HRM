<?php include('../PHP/connection.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/main-style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">

    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" method="post">
                    <h2 class="title">Employee Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="employee_name" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="employee_pass" required />
                    </div>
                    <div class="forgot_password">
                        <a href="forgotpass.php">Forgot Password?</a>
                    </div>
                    <input class="btn solid" type="submit" value="Login" name="login1"/>
                </form>


                <?php 
                //for employee login
                session_start();
                if(isset($_POST['login1'])){   
                $u_name = $_POST["employee_name"];     //defining a variable   
                $pass = $_POST["employee_pass"];   //defining a variable 
                
                $_SESSION ["employee_name"]=$u_name;

                
                $sql_query = "select * from employee where user_name = '$u_name' and password = '$pass'";      //acessing from sql
                $result = $dbconnection -> query($sql_query);
                if ($row = $result -> fetch_assoc()) {
                header('Location: employeedashboard.php');
                } else {
                    $_SESSION ["employee_name"]=$u_name;
                    echo'<script>
                    Swal.fire({
                        icon: "error",
                        title: "Err...",
                        text: "You provided wrong credentials!",
                      })
                    </script>';
                // header('Location: ../index.html');
                 } 
                }
                ?>


                <form action="#" class="sign-up-form" method="post">
                    <h2 class="title">Admin Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="admin_name" required />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="admin_password" required />
                    </div>
                    <input type="submit" class="btn" value="Login" name="login" >
                </form>



                <?php 
                //for admin login 
                if(isset($_POST['login'])){
                $u_name = $_POST["admin_name"];     //defining a variable   
                $pass = $_POST["admin_password"];   //defining a variable   
   
                $sql_query = "select * from admin where username = '$u_name' and password = '$pass'";
                $result = $dbconnection -> query($sql_query);
                if ($row = $result -> fetch_assoc()) {
                header('Location: dashboard.php');
                } else {
                    echo'<script>
                    Swal.fire({
                        icon: "error",
                        title: "Err...",
                        text: "You provided wrong credentials!",
                      })
                    </script>';
                }
                }   
                ?>                
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>Click below for admin login!</h3> -->
                    <button  class="btn transparent" id="sign-up-btn">Admin Login</button>
                </div>

                <img src="../assets/employee.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <!-- <h3>Click below for employee login!</h3> -->
                    <button class="btn transparent" id="sign-in-btn">Employee</button>
                </div>
                <img src="../assets/admin.png" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="../JS/nav-bar.js"></script>
    <script src="../JS/dashboard.js"></script>

</body>

</html>
