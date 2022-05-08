<?php
session_start();
            include('connection.php');

            if(isset($_POST['edit'])){ 
                $updated_email = $_POST['email'];
                $updated_contact = $_POST['contact'];
                $u_name = $_SESSION['employee_name'];

                $db_select = "SELECT * from employee";
                $result1=$dbconnection->query($db_select);

                $update_data1 = "UPDATE employee SET email ='$updated_email' WHERE user_name = '$u_name'";
                $result2 =$dbconnection->query($update_data1);

                $update_data2 = "UPDATE employee SET contact ='$updated_contact' WHERE user_name = '$u_name'";
                $result3 = $dbconnection->query($update_data2);
                    echo '<script>
                        alert("Details Updated!");    
                        window.location.href="../HTML/employeedashboard.php";
                        </script>';
            }
?>