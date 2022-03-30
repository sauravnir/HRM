<?php 
// session_start();
// include_once("connection.php");


// if(isset($_POST['submit1'])){
//     // $_SESSION['info'] = "";
//     $new_psw = mysqli_real_escape_string($dbconnection, $_POST['newpassword']);
//     $c_psw= mysqli_real_escape_string($dbconnection, $_POST['changepassword']);
//     if($new_psw !== $c_psw){
//         echo "Wrong password!";
//     }else{
//         $emp_id == $_SESSION['employeeid'];
//         $user_name == $_SESSION['username'];
//         $email = $_SESSION['email']; //getting this email using session
//         // $encpass = password_hash($password, PASSWORD_BCRYPT);
//         $update_pass = "UPDATE employee SET password = '$new_pass', confirm_password ='$c_psw' WHERE email = '$email', employee_id='$emp_id' ,user_name='$user_name', email='$email'";
//         $run_query = mysqli_query($dbconnection, $update_pass);
//         if($run_query){
//             header('Location:../HTML/main.php');
//         }else{
//             echo "error!";
//         }
//     }
// }
?>