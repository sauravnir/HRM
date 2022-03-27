<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgotPassword</title>
    <link rel="stylesheet" href="../CSS/forgotpass.css">
</head>

<body>
    <div class="container">
        <!---Creating a div container-->
        <div class="header">
            <!---Creating a div class named header-->
            <h2> -------Forgot Password-------</h2>
            <!--AN h2 text for labeling the Forgot Password-->
        </div>
        <form method="post" action="../PHP/forpass.php" id="form" class="form">
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
    </div>
<script src=""></script>
</body>

</html>
