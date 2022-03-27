<?php 
include_once("connection.php"); //connecting to the database 



if(isset($_POST['submit'])){
    if(!empty($_POST['employeeid']) && !empty($_POST['username']) && !empty($_POST['email'])){ //checking empty values
        
    $emp_id = $_POST['employeeid']; // defining a variable to store data from an HTML form.
    $user_name = $_POST['username']; // defining a variable to store data from an HTML form.
    $email = $_POST['email']; // defining a variable to store data from an HTML form.


    $sql_query= "SELECT * FROM employee WHERE employee_id = '$emp_id' AND user_name ='$user_name' AND email ='$email'";   //matching user input values in database
    $result = $dbconnection ->query($sql_query); //running command 

    if ($result) {
     if ($result ->num_rows >0) {
    header("Location:../HTML/changepassword.php"); //rediceting to another page

    
    
    } else {            //displaying error alert message
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        // header("Location:../HTML/forgotpass.php");
    }
} else {
  echo 'Error: '.mysql_error();
} 

    } 
}



//change password incomplete



if(isset($_POST['submit1'])){
    if(!empty($_POST['newpassword']) && (!empty($_POST['changepassword']))){

            $newpass = $_POST['newpassword'];
            $changepass = $_POST['changepassword'];
        
            $sql_query1= "SELECT * FROM employee WHERE employee_id = '$emp_id' AND user_name ='$user_name' AND email ='$email'";
            $result1 = $dbconnection ->query($sql_query1);
            // var_dump($result1);

    }
}
?>

