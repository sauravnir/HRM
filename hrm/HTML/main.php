<?php include('../PHP/adminlogin.php')  ?>
<?php include('../PHP/employeelogin.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/main-style.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
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
                    <input type="submit" class="btn" value="Login" name="login">


                </form>

            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>Click below for admin login!</h3> -->
                    <button class="btn transparent" id="sign-up-btn">Admin Login</button>
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
    <script src="../JS/main.js"></script>

</body>

</html>
