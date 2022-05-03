<?php
session_start();
include_once("connection.php");

//fetching the variables from details.php
$empID = $_REQUEST['employID'];

//deleting records from table 
$data_del = "DELETE from employee WHERE employee_id = '$empID'";
$result1= $dbconnection -> query($data_del);
header("Location:../HTML/details.php");
?>