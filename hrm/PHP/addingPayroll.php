<?php
session_start();
include_once("../PHP/connection.php");

// if(!empty($_POST['amount']) && !empty($_POST['paymentDate']) && !empty($_POST['paymentDetails']) && !empty($_POST['paymentMethod'])){

    $amount =$_POST['amount'];
    $pay_date =$_POST['paymentDate'];
    $pay_details = $_POST['paymentDetails'];
    $payment_method  = $_POST['paymentMethod'];
    $bankacc = $_POST['bankacc'];


    $data_select = "SELECT amount,payment_date,payment_method,payment_details from employee WHERE bankAcc='$bankacc'";
    $result = $dbconnection->query($data_select);

    $row = mysqli_fetch_array($result);
    $update_data ="UPDATE employee SET amount='$amount' WHERE bankAcc='$bankacc'";
    $result1=$dbconnection -> query($update_data);
    $update_data1 ="UPDATE employee SET payment_date='$pay_date' WHERE bankAcc='$bankacc'";
    $result2=$dbconnection -> query($update_data1);
    $update_data2 ="UPDATE employee SET payment_method='$payment_method' WHERE bankAcc='$bankacc'";
    $result3=$dbconnection -> query($update_data2);
    $update_data3 ="UPDATE employee SET payment_details='$pay_details' WHERE bankAcc='$bankacc'";
    $result4=$dbconnection -> query($update_data3);
    $update_data4 ="UPDATE employee SET status='Paid' WHERE bankAcc='$bankacc'";
    $result5=$dbconnection -> query($update_data4);

    // echo'<script>
    // alert("You have successfully added payroll!!");
    // window.location.href="../HTML/dashboard.php";
    // </script>';
    header('Location:../HTML/dashboard.php');
// }else{
// }
?>