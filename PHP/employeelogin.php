<?php 

include('connection.php');      //connecting to the databas e

if(isset($_POST['login1'])){   
$u_name = $_POST["employee_name"];     //defining a variable   
$pass = $_POST["employee_pass"];   //defining a variable 

$sql_query = "select * from employee where user_name = '$u_name' and password = '$pass'";      //acessing from sql
$result = $dbconnection -> query($sql_query);
if ($row = $result -> fetch_assoc()) {
    header('Location: employeedashboard.php');
} else {
    echo '<script>
    alert("Wrong Credentials!");
    /script>';
    // header('Location: ../index.html');
}   

// $sql_query = $dbconnection->prepare("select * from employee where user_name = ?");   //launching an sql command
// $sql_query->bind_param("s",$u_name);        //assigning a parameter to the variable 
// $sql_query->execute();      //firing a command  
// $result =$sql_query->get_result();          //firing a command 
// if($result -> num_rows > 0){        
//     $data = $result ->fetch_assoc();        //fetching data from $result
//     if($data['password'] === $pass){        //checking conditions 
//         header("Location:employeedashboard.php");      //redirecting to the registration page 
//     } 
//     else{
//         echo '<script>
//         alert("Wrong Credentials!");
//         /script>';
//     }
    
// }else{
//     // $message = "Username and/or Password incorrect.\\nTry again.";
//     // echo "<script type='text/javascript'>alert('$message');</script>";
// }
}

?>
