<?php 
#connecting to database 
$servername = "localhost";
$username ="root";
$password ="";
// $database ="hrm";

$dbconnection = new mysqli($servername,$username,$password);
//check whether database exists or not 
$dbexists = "SELECT SCHEMA_NAME             
FROM INFORMATION_SCHEMA.SCHEMATA
WHERE SCHEMA_NAME = 'hrm'";

//firing command
$result = $dbconnection->query($dbexists);

if($result->num_rows == 0){
    // Create Database
    $database = "hrm";
    $db_query = "CREATE DATABASE ".$database.";";
    $dbconnection->query($db_query);
    // Select Database
    $dbconnection->select_db($database);
    // Create Table
    $create_table = "
    create table admin(
        id int  AUTO_INCREMENT PRIMARY KEY,
        username varchar(80) DEFAULT NULL,
        password varchar(80) DEFAULT NULL
        
    );
    ";
    //fire create table code
    $dbconnection->query($create_table);
    $add_value="
    INSERT INTO admin(username,password) values('admin','admin');";
    $dbconnection->query($add_value);

    $dbconnection ->select_db($database);
    //create table
    $c_table ="
    create table employee(
        id int AUTO_INCREMENT PRIMARY KEY,
        first_name varchar(80) DEFAULT NULL,
        last_name varchar(80) DEFAULT NULL,
        user_name varchar(80) DEFAULT NULL,
        department varchar(100) DEFAULT NULL,
        designation varchar(100) DEFAULT NULL,
        employee_id mediumint(9) DEFAULT NULL,
        email varchar(80) DEFAULT NULL,
        contact int(11) DEFAULT NULL,
        password char(40) DEFAULT NULL,
        confirm_password char(40) DEFAULT NULL,
        issued_date date,
        gender char(10) DEFAULT NULL
    );";


    $dbconnection->query($c_table);    
}

//if database exist or created select database
$dbconnection->select_db("hrm");



if ($dbconnection -> connect_errno) {    
    echo "Failed to connect to MySQL: " .$mysqli -> connect_error;
    exit();     
}
?>
