<?php
include('connection.php');


if (isset($_POST['approve'])){
    
    $remarks = $_POST['remarks'];
    $leave_date = $_POST['leavedate'];
    $employ_id = $_POST['employee_id'];
    
    $db_select = "SELECT * from leaverequest where leave_date ='$leave_date' and employee_id ='$employ_id'";
    $result = $dbconnection -> query($db_select);
    if ($result){
        $update_data ="UPDATE leaverequest SET remarks='$remarks' where leave_date= '$leave_date' and employee_id ='$employ_id'";
        $result1=$dbconnection -> query($update_data);

        $update_data1 ="UPDATE leaverequest SET status='Approved' where leave_date= '$leave_date' and employee_id ='$employ_id'";
        $result2=$dbconnection -> query($update_data1);

        header('Location:../HTML/leave.php');
        
    }



    //  $db_select = "SELECT * from "
}

if (isset($_POST['discard'])){
    
    $remarks = $_POST['remarks'];
    $leave_date = $_POST['leavedate'];
    $employ_id = $_POST['employee_id'];
    
    $db_select_2 = "SELECT * from leaverequest where leave_date ='$leave_date' and employee_id ='$employ_id'";
    $result = $dbconnection -> query($db_select_2);
    if ($result){
        $update_data_1 ="UPDATE leaverequest SET remarks='$remarks' where leave_date= '$leave_date' and employee_id ='$employ_id'";
        $result_1=$dbconnection -> query($update_data_1);

        $update_data_2 ="UPDATE leaverequest SET status='Discared' where leave_date= '$leave_date' and employee_id ='$employ_id'";
        $result_2=$dbconnection -> query($update_data_2);

       header('Location:../HTML/leave.php');
    }



    //  $db_select = "SELECT * from "
}



?>