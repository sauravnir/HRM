<?php 

include('connection.php');  //connecting to the database 

if(isset($_POST['submit'])){ 
    // if(!empty($_POST['firstname']) && (!empty($_POST['lastname'])) && (!empty($_POST['username'])) && (!empty($_POST['designation'])) && (!empty($_POST['department']) )&& (!empty($_POST['employeeid']))&& (!empty($_POST['contact']))&& (!empty($_POST['email'])) && 
    // (!empty($_POST['password'])) && (!empty($_POST['confirmpsw'])) && (!empty($_POST['issuedDate'])) && (!empty($_POST['radiogroup1']))){   
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
    $tranId = ($_POST['transid']);// defining a variable to store data from an HTML form.


    if($_POST['password'] === $_POST['confirmpsw']){    //checking conditionals 
        $sql_insert = "INSERT INTO employee(`first_name`,`last_name`,`user_name`,`department`,`designation`,`employee_id`,`email`,`contact`,`password`,`confirm_password`,`issued_date`,`gender`,`transactionid`)  values('$firstname', '$lastname','$username','$depart','$desig','$employid','$email','$contact','$pass','$c_Pass','$i_date','$gender','$tranId')";  //inserting data into database 
        $result1 = $dbconnection ->query($sql_insert);  //running query 
        //checking for same username and password
        if ($result1){

            header('Location:../HTML/dashboard.php');     
        } 
            //incomplete
    }   
    else{
        header('Location:../HTML/empreg.php');
    }

}


// $check_user = ("SELECT * FROM employee WHERE user_name='$username' OR email='$email' LIMIT 1"); 
    // $result=$dbconnection ->query($check_user);
    // var_dump($result);
    // $user = $result ->fetch_assoc();       //fetching the data into an array   

    // if($user){          //if user exist 
    //     if($user['user_name'] === $username)  {
    //         echo "Username already exists!";
    //     }
    //     if($user['email'] === $email){      //same email
    //         echo "Email already exists!";
    //     }   

    //     if(($user['user_name'] === $username) || ($user['email'] === $email)){    //for both username and email 
    //      echo "Both Username and email already exist!";
    //     }
    // }
    

    
// }
// }
    // if($pass != $c_Pass){
        
    // }

    // $check_dbms = "Select * from employee WHERE user_name ='$username' or employee_id ='$employid' or email ='$email'";
    // $result = $db_connection -> query($check_dbms);
    // $datas = mysqli_fetch_assoc($result);
    // var_dump($datas);
    // $sql_insert = "INSERT INTO employee(first_name,last_name,user_name,department,designation,employee_id,email,contact,password,confirm_password,issued_date)
    //                         values('$firstname', '$lastname','$username','$depart','$desig','$employid','$email','$contact','$pass','$c_Pass','$i_date')";
    //         $result = $dbconnection ->query($sql_insert);
    //         header('Location:../index.php');  

        
    // }

// if ($_POST != null) { // Check to see if the data is empty.
//     $fullname = $_GET['fullname']; // defining a variable to store data from an HTML form.
//     $gender = $_GET['gender']; // defining a variable to store data from an HTML form.
//     $email = $_GET['emailAddress']; // defining a variable to store data from an HTML form.
//     $useraddress = $_GET['address']; // defining a variable to store data from an HTML form.
//     $postalcode = $_GET['postalcode']; // defining a variable to store data from an HTML form.
//     $houseno = $_GET['houseno']; // defining a variable to store data from an HTML form.
//     $contactno = $_GET['contactno']; // defining a variable to store data from an HTML form.
//     $password = $_GET['password']; // defining a variable to store data from an HTML form.
//     // header('Location: ../index.php'); // return back to login page after success.
//     if ($_GET["password"] === $_GET["confirmPassword"]) { // password validation using if statement.
//         $insert_query = "insert into users (fullname, gender, email, address, postalcode, houseno, contactno, password) values ('$fullname', '$gender', '$email', '$useraddress', '$postalcode', '$houseno', '$contactno', '$password')"; // creating query for inserting values on database.
//         $result = $db_connection -> query($insert_query); // execute query.
//         header('Location: ../index.html');
//     }
//     else {
//         header('Location: ../pages/signup.html');
//     }
// // }

?>
