<?php
session_start();
include_once('connection.php');

if(isset($_POST['submit'])){
    $leave_type = $_POST['leavetype'];
    $leave_date = $_POST['leavedate'];
    $leave_reason = $_POST['reason'];
    $depart = $_POST['department'];
    $employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $u_name = $_SESSION['employee_name'];


    $db_select = "SELECT * from leaverequest";
    $result = $dbconnection ->query($db_select);
    

    $insert_data ="INSERT INTO leaverequest(`employee_id`,`leave_type`,`employee_name`,`reason`,`remarks`,`department`,`status`,`leave_date`,`user_name`)  
    values('$employee_id', '$leave_type','$name','$leave_reason','Pending','$depart','Pending','$leave_date','$u_name')";
    $result1 = $dbconnection -> query($insert_data);

    if($result1){
        echo '<script>
            alert("Leave Request Registered!");    
            window.location.href="../HTML/employeedashboard.php";
            </script>';
    }
}
?>