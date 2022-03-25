<?php 
require 'connection.php';
if ($_POST != null) { // Check to see if the data is empty.
    $fullname = $_GET['fullname']; // defining a variable to store data from an HTML form.
    $gender = $_GET['gender']; // defining a variable to store data from an HTML form.
    $email = $_GET['emailAddress']; // defining a variable to store data from an HTML form.
    $useraddress = $_GET['address']; // defining a variable to store data from an HTML form.
    $postalcode = $_GET['postalcode']; // defining a variable to store data from an HTML form.
    $houseno = $_GET['houseno']; // defining a variable to store data from an HTML form.
    $contactno = $_GET['contactno']; // defining a variable to store data from an HTML form.
    $password = $_GET['password']; // defining a variable to store data from an HTML form.
    // header('Location: ../index.php'); // return back to login page after success.
    if ($_GET["password"] === $_GET["confirmPassword"]) { // password validation using if statement.
        $insert_query = "insert into users (fullname, gender, email, address, postalcode, houseno, contactno, password) values ('$fullname', '$gender', '$email', '$useraddress', '$postalcode', '$houseno', '$contactno', '$password')"; // creating query for inserting values on database.
        $result = $db_connection -> query($insert_query); // execute query.
        header('Location: ../index.html');
    }
    else {
        header('Location: ../pages/signup.html');
    }
}











?>
