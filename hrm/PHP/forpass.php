<?php 
// session_start();
include_once("connection.php"); //connecting to the database 
// $emp_id = $_POST['employeeid'];
// $_SESSION['employeeid'] = $emp_id;
// $submit =$_POST['submit'];
// $_SESSION['submit']=$submit;
if(isset($_POST['submit'])){
    // if(!empty($_POST['employeeid']) && !empty($_POST['username']) && !empty($_POST['email'])){ //checking empty values        
    $emp_id = $_POST['employeeid']; // defining a variable to store data from an HTML form.
    // $emp_id =$_SESSION['employeeid'];
    $user_name = $_POST['username']; // defining a variable to store data from an HTML form.
    // $user_name=$_SESSION['username'];
    $email = $_POST['email']; // defining a variable to store data from an HTML form.
    // $email =$_SESSION['email'];


    $sql_query= "SELECT * FROM employee WHERE employee_id = '$emp_id' AND user_name ='$user_name' AND email ='$email'";   //matching user input values in database
    $result = $dbconnection ->query($sql_query); //running command 

    if ($result) {
     if ($result ->num_rows >0) {
    header("Location:../HTML/changepassword.php"); //rediceting to another page
    
    } else {            //displaying error alert message
        header("Location:../HTML/forgotpass.php");
    }
} else {
  echo 'Error: '.mysql_error();
} 

    } 
?>

    