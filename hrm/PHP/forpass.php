<?php 
session_start();
include_once("connection.php"); //connecting to the database 

if(isset($_POST['submit'])){
    // if(!empty($_POST['employeeid']) && !empty($_POST['username']) && !empty($_POST['email'])){ //checking empty values        
    $emp_id = $_POST['employeeid']; // defining a variable to store data from an HTML form.
    $_SESSION ['employeeid'] = $emp_id;
    $user_name = $_POST['username']; // defining a variable to store data from an HTML form.
    $_SESSION ['username'] =$user_name;
    $email = $_POST['email']; // defining a variable to store data from an HTML form.
    $_SESSION ['email'] =$email;
 

    $sql_query= "SELECT * FROM employee WHERE employee_id = '$emp_id' AND user_name ='$user_name' AND email ='$email'";   //matching user input values in database
    $result = $dbconnection ->query($sql_query); //running command 

    if ($result) {
     if ($result ->num_rows >0) {
    header("Location:../HTML/changepassword.php"); //rediceting to another page
    
    } else {            //displaying error alert message
        header("Location:../HTML/forgotpass.php");
    }
} else {
//   echo 'Error: '.mysql_error();
} 
    } 
?>

    