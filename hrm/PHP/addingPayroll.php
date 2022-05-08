<?php

session_start();

include_once("../PHP/connection.php");


    $amount =$_POST['amount'];
    $final_amount='Rs'.' '.$amount;
    $pay_date =$_POST['paymentDate'];
    $pay_details = $_POST['paymentDetails'];
    $payment_method  = $_POST['paymentMethod'];
    $bankacc = $_POST['bankacc'];
    $employ_id = $_POST['employee_id'];
    $employ_name = $_POST['employee_name'];
    $contacts = $_POST['contact'];
    $user_name = $_POST['user_name'];


    $sql_insert1 = "INSERT INTO salary(`bankAcc`,`employee_id`,`employee_name`,`contact`,`payment_date`,`status`,`amount`,`payment_details`,`payment_method`,`user_name`) 
    values('$bankacc','$employ_id','$employ_name','$contacts','$pay_date','Paid','$final_amount','$pay_details','$payment_method','$user_name')";
    $result2 =$dbconnection -> query($sql_insert1);
    header('Location:../HTML/dashboard.php');

?>