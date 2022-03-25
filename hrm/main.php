<!-- <?php include('./PHP/adminlogin.php') ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./HTML/main-style.css" />
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
                        <input type="text" placeholder="Username" name="employee_name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password"  name="employee_pass"/>
                    </div>
                    <div class="forgot_password">
                        <a href="./HTML/forgotpass.html">Forgot Password?</a>
                    </div>
                    <input class="btn solid" type="submit" value="Login" />
                </form>


                <form action="./PHP/adminlogin.php" class="sign-up-form" method="post">
                    <h2 class="title">Admin Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="admin_name" required />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="admin_password" required/>
                    </div>
                    <input type="submit" class="btn" value="Login" onclicked="./HTML/forgotpass.html">
                </form>

            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>Click below for admin login!</h3> -->
                    <button class="btn transparent" id="sign-up-btn">Admin Login</button>
                </div>

                <img src="./assets/employee.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <!-- <h3>Click below for employee login!</h3> -->
                    <button class="btn transparent" id="sign-in-btn">Employee</button>
                </div>
                <img src="./assets/admin.png" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="./JS/app.js"></script>

</body>

</html>
