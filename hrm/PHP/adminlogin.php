<?php 

include_once('connection.php');


$u_name = $_POST["admin_name"];
$pass = $_POST["admin_password"];


$sql_query = $dbconnection->prepare("select * from admin where username = ?");
$sql_query->bind_param("s",$u_name);
$sql_query->execute();
$result =$sql_query->get_result();
if($result -> num_rows > 0){
    $data = $result ->fetch_assoc();
    if($data['password'] === $pass){
        header("Location:../HTML/forgotpass.html");
    } 
    else{
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
}else{
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}



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


    

