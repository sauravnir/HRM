<?php 

include('connection.php');      //connecting to the database

if(isset($_POST['login'])){
 $u_name = $_POST["admin_name"];     //defining a variable   
$pass = $_POST["admin_password"];   //defining a variable   

    $sql_query = "select * from admin where username = '$u_name' and password = '$pass'";
    $result = $dbconnection -> query($sql_query);
    if ($row = $result -> fetch_assoc()) {
        header('Location: dashboard.php');
    } else {
        echo '<script> 
        alert("Wrong Credentials!");
        /script>';
        // header('Location: ../index.html');
    }
}
// $sql_query = $dbconnection->prepare("select * from admin where username = ?");   //launching an sql command
// $sql_query->bind_param("s",$u_name);        //assigning a parameter to the variable 
// $sql_query->execute();      //firing a command  
// $result =$sql_query->get_result();          //firing a command 
// if($result -> num_rows > 0){        
//     $data = $result ->fetch_assoc();        //fetching data from $result
//     if($data['password'] === $pass){        //checking conditions 
//         header("Location:dashboard.php");      //redirecting to the registration page 
//     } 
//     else{
        // $_SESSION['error'] = $error;
        // header('Location:index.php');
        // $message = "Username and/or Password incorrect.\\nTry again.";
        // echo "<script type='text/javascript'>alert('$message');</script>";
//     }
    
// }else{
//     // $message = "Username and/or Password incorrect.\\nTry again.";
//     // echo "<script type='text/javascript'>alert('$message');</script>";
// }









// $sql_query= "SELECT Admin_Name , Password from admin where Admin_Name ='$u_name'and Password = '$pass'";
// $result = $mysqli->query($sql_query);
// var_dump($result);
// if($result -> num_rows != 0){
//    $sql = "SELECT Admin_Name , Password from admin where Admin_Name ='$u_name'and Password = '$pass' limit 1";
//    $result1 = $mysqli ->query($sql);
//    $data = mysqli_fetch_array($result);
//     var_dump($data);
//    foreach($data as $datas){
//        if(($datas['admin_name'] == $u_name) && ($datas['admin_password'] == $pass)){
//            header("Location: forgotpass.html");
//        }
//    }

//    if($u_name == ($data -> Admin_Name) && ($pass == ($data -> Password))){
//     // header("Location: forgotpass.html");
//    }
// if(mysqli_num_rows($result1)==1){
//     echo "You Have Successfully Logged in";
//     exit();
// }   
// else{
//     echo "Wrong password";
// }
        
// }

?>


    

