<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../CSS/forgotpass.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">

</head>
<body>
    <div class="container">      <!---Creating a div container-->
        <div class="header">      <!---Creating a div class named header-->
            <h2> -------Change Password-------</h2> <!--AN h2 text for labeling the Forgot Password-->
        </div>
        <form method="post" acton="../PHP/forpass.php"id="form" class="form">   <!--creating a form-->
            
            <div class="main-form">
                <label for="password">New Password</label> <!--creating a label for the username-->
                <input type="password" placeholder="Password"  name="newpassword" required /> <!--user have to input their username-->
                
            </div>
            <div class="main-form">
                <label for="mail">Change Password</label> <!--creating a label for the email-->
                <input type="password" placeholder="Confirm Password"  name="changepassword" required/> <!--user have to input their email-->
            </div>
            <input id="submitbtn" class="submitBtn" type="submit" value="Submit" name="submit1" />
        </form>
        <?php 
        session_start();
        include_once('../PHP/connection.php');
        
        if(isset($_POST['submit1'])){
        //loading data from forgot password page
        $emp_id = $_SESSION['employeeid'];
        $user_name = $_SESSION['username'];
        $email = $_SESSION['email'];

        //creating a new password and change password variable
        $new_pass = $_POST['newpassword'];
        $change_pass =$_POST['changepassword'];
        
        //selecting particular data from the database 
        $db_select = "SELECT password from employee where employee_id='$emp_id' and user_name='$user_name' and email='$email'";
        $result = $dbconnection ->query($db_select);
        //fetching the data into an array
        $row = mysqli_fetch_array($result);
        if($new_pass == $change_pass){
            //updating data 
            $change_data = "UPDATE employee set password='$new_pass' WHERE user_name ='$user_name'";
            $result1 = $dbconnection ->query($change_data); 
            echo'<script>
            alert("Changed password successfully!!")
            window.location.href="main.php";
            </script>;
                ';
                // header('Location:main.php');
        }
        else{
            echo'<script>
            alert("Err..!")
            </script>';
        }
        }
        ?>
    </div>
    
</body>
</html>