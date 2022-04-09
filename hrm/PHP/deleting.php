<?php
session_start();
include_once("connection.php");

//fetching the variables from details.php
$s_num=$_SESSION['id'];
$depart=$_SESSION['department'];
$l_name=$_SESSION['last_name'];
$f_name =$_SESSION['first_name'];

//deleting records from table 
$data_del = "DELETE from employee WHERE first_name= '$f_name' AND last_name='$l_name'";
$result1= $dbconnection -> query($data_del);
header("Location:../HTML/details.php");
?>