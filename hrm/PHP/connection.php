<?php 
#connecting to database 
$servername = "localhost";
$username ="root";
$password ="";
$database ="hrm";

$dbconnection = new mysqli($servername,$username,$password,$database);

if ($dbconnection -> connect_errno) {    
    echo "Failed to connect to MySQL: " .$mysqli -> connect_error;
    exit();     
}
?>
