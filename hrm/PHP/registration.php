<?php 
session_start();
include('connection.php');  //connecting to the database 

if(isset($_POST['submit'])){ 
    // if(!empty($_POST['firstname']) && (!empty($_POST['lastname'])) && (!empty($_POST['username'])) && (!empty($_POST['designation'])) && (!empty($_POST['department']) )&& (!empty($_POST['employeeid']))&& (!empty($_POST['contact']))&& (!empty($_POST['email'])) && 
    // (!empty($_POST['password'])) && (!empty($_POST['issuedDate'])) && (!empty($_POST['radiogroup1']) && (!empty($_POST['transid'])))){   
                      $firstname = ($_POST['firstname']); // defining a variable to store data from an HTML form.
                      $lastname =($_POST['lastname']);  // defining a variable to store data from an HTML form.     
                      $username = ($_POST['username']); // defining a variable to store data from an HTML form.
                      $desig = ($_POST['designation']);// defining a variable to store data from an HTML form.
                      $depart = ($_POST['department']);// defining a variable to store data from an HTML form.
                      $employid = ($_POST['employeeid']);// defining a variable to store data from an HTML form.
                      $contact = ($_POST['contact']);// defining a variable to store data from an HTML form.
                      $email = ($_POST['email']);// defining a variable to store data from an HTML form.
                      $pass = ($_POST['password']);// defining a variable to store data from an HTML form.
                      $c_Pass = ($_POST['confirmpsw']);// defining a variable to store data from an HTML form.
                      $i_date = ($_POST['issuedDate']);// defining a variable to store data from an HTML form.    
                      $gender = ($_POST['radiogroup1']);// defining a variable to store data from an HTML form.
                      $bankAcc = ($_POST['bankAcc']);// defining a variable to store data from an HTML form.
                      $full_name = $firstname." ".$lastname; 
                    //   echo $full_name;

    if($_POST['password'] === $_POST['confirmpsw']){    //checking conditionals 
        $sql_insert = "INSERT INTO employee(`first_name`,`last_name`,`user_name`,`department`,`designation`,`employee_id`,`email`,`contact`,`password`,`issued_date`,`gender`,`bankAcc`)  
        values('$firstname', '$lastname','$username','$depart','$desig','$employid','$email','$contact','$pass','$i_date','$gender','$bankAcc')";  //inserting data into database 
        $result1 = $dbconnection ->query($sql_insert);  //running query 


        //inserting into salary table
        $sql_insert1 = "INSERT INTO salary(`employee_name`,`employee_id`,`bankAcc`,`contact`,`payment_date`,`status`,`amount`,`payment_details`,`payment_method`,`user_name`) values('$full_name','$employid','$bankAcc','$contact','Null','Null','Null','Null','Null','$username')";
        $result2 =$dbconnection -> query($sql_insert1);

        //checking for same username and password
        if ($result1){
            echo '<script>
            alert("Employee Created!");    
            window.location.href="../HTML/dashboard.php";
            </script>';
            // header('Location:../HTML/dashboard.php');     
        } 
    }   
    else{
        // header('Location:../HTML/empreg.php');
    }

}
else{
    
}
?>
