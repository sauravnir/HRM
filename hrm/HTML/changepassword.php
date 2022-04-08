
<?php 

// if($emp_id == false || $user_name == false || $email == false ){
//     header('Location:forgotpass.php');
// }
// else{
//     header('Location:changepassword.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../CSS/forgotpass.css">
</head>
<body>
    <div class="container">      <!---Creating a div container-->
        <div class="header">      <!---Creating a div class named header-->
            <h2> -------Change Password-------</h2> <!--AN h2 text for labeling the Forgot Password-->
        </div>
        <form method="post" acton="../PHP/forpass.php"id="form" class="form">   <!--creating a form-->
            
            <div class="main-form">
                <label for="password">New Password</label> <!--creating a label for the username-->
                <input type="password" placeholder="Your Username" id="username" name="newpassword" /> <!--user have to input their username-->
                
            </div>
            <div class="main-form">
                <label for="mail">Change Password</label> <!--creating a label for the email-->
                <input type="password" placeholder="Your Email" id="email" name="changepassword"/> <!--user have to input their email-->
            </div>
            <input id="submitbtn" class="submitBtn" type="submit" value="Submit" name="submit1" />
        </form>
        
        
    </div>
    
</body>
</html>