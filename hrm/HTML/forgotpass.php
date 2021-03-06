<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgotPassword</title>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/forgotpass.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">

</head>

<body>
    <div class="container">
        <!---Creating a div container-->
        <div class="header">
            <!---Creating a div class named header-->
            <h2> -------Forgot Password-------</h2>
            <!--AN h2 text for labeling the Forgot Password-->
        </div>
        <form method="post" action="#" id="form" class="form">
            <!--creating a form-->
            <div class="main-form">
                <!--creating a div for the form naming it main-form-->
                <label for="id-employee">Employee ID</label>
                <!--creating a label for the id of employee-->
                <input type="number" placeholder="Your Id" id="employee" name="employeeid" required/>
                <!--user have to input the employee number-->
                <small>Error message</small>
                <!--incase of error a pop up will appear-->
            </div>
            <div class="main-form">
                <label for="username">Username</label>
                <!--creating a label for the username-->
                <input type="text" placeholder="Your Username" id="username" name="username" required/>
                <!--user have to input their username-->
                <small>Error message</small>
                <!--incase of error a pop up will appear-->
            </div>
            <div class="main-form">
                <label for="mail">Email</label>
                <!--creating a label for the email-->
                <input type="email" placeholder="Your Email" id="email" name="email" required/>
                <!--user have to input their email-->
                <small>Error message</small>
                <!--incase of error a pop up will appear-->
            </div>
            <input id="submitbtn" class="submitBtn" type="submit" value="Submit" name="submit" />
        </form>
        <!-- <button onclick="window.location.href ='../HTML/changepassword.php';" type ="submit" class="submitBtn" name="submit" >Submit</button> -->

        <button onclick="window.location.href ='../HTML/main.php';" class="cancelBtn" name="Cancel" >Back</button>

        <?php 
        session_start();
        include_once("../PHP/connection.php"); //connecting to the database 

        if(isset($_POST['submit'])){
        // if(!empty($_POST['employeeid']) && !empty($_POST['username']) && !empty($_POST['email'])){ //checking empty values        
        $emp_id = $_POST['employeeid']; // defining a variable to store data from an HTML form.
            
        $user_name = $_POST['username']; // defining a variable to store data from an HTML form.
        
        $email = $_POST['email']; // defining a variable to store data from an HTML form.
       
        

        //defining session variables
        $_SESSION ['email'] =$email;
        $_SESSION ['username'] =$user_name;
        $_SESSION ['employeeid'] = $emp_id;

        
        $sql_query= "SELECT * FROM employee WHERE employee_id = '$emp_id' AND user_name ='$user_name' AND email ='$email'";   //matching user input values in database
        $result = $dbconnection ->query($sql_query); //running command 

        if ($result) {
         if ($result ->num_rows >0) {
        header("Location:../HTML/changepassword.php"); //rediceting to another page
    
        } else {            //displaying error alert message
            echo'<script>
                    Swal.fire({
                        icon: "error",
                        title: "Err...",
                        text: "You provided wrong credentials!",
                      })
                    </script>';
        // header("Location:../HTML/forgotpass.php");
        }
        } else {
         echo 'Error: '.mysql_error();
        } 

        } 
        ?>
    </div>
</body>

</html>
