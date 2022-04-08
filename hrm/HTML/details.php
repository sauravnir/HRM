<?php include_once("../PHP/connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="main">
        <div class="leftSidebar">
            <div class="logo-ctn">
                <img src="../assets/logo.png" alt="">
                <h3>Quinate Creations</h3>
            </div>

            <div class="tabs">
                <a href="dashboard.php">
                    <div class="tab"><img src="../assets/dashboard.png" alt="">
                        <h5>Dashboard</h5>
                    </div>
                </a>
                <a href="empreg.php">
                    <div class="tab"><img src="../assets/employeeAdd.png" alt="">
                        <h5>Create Employee</h5>
                    </div>
                </a>
                <a href="details.php">
                    <div class="tab active"><img src="../assets/employeedetaiils.png" alt="">
                        <h5>Employee Details</h5>
                    </div>
                </a>
                <a href="leave.php">
                    <div class="tab"><img src="../assets/leave.png" alt="">
                        <h5>Leave Request</h5>
                    </div>
                </a>
                
                <div class="tab1"><img src="../assets/logout.png" alt="">
                    <button id="logout" onclick="logOut()">Logout</button>
                </div>

            </div>
        </div>
        <div class="main-container">
            <div class="top-bar">
                <button id="toggle" class="circle"></button>
                <div class="prf-container">
                    <div class="prf-circle">
                        <img src="../assets/pp.png" alt="">
                    </div>
                    <h6 class="prf-username">Admin</h6>
                </div>
            </div>

            <div class="dashboard-content">
                <h1 class="ContentTitle">Employee Details</h1><br><br>
            </div>
            <div class="table-container">
                <h1 class="heading">Employee List</h1>
                <table class="table">
                    <thead>
                        <tr class="columns">
                            <th name="i.d.">S.N.</th>
                            <th name="department">Department</th>
                            <th name="name">Names</th>
                            <th name="info">Information</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 


$db_select ="SELECT id,first_name,last_name,department from employee";
$result = $dbconnection -> query($db_select);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $s_num = $row['id'];
        // $_SESSION['id']=$s_num;
        $depart = $row['department'];
        // $_SESSION['department']=$depart;    
        $f_name = $row['first_name'];
        // $_SESSION['first_name']=$f_name;
        $l_name = $row['last_name'];
        // $_SESSION['last_name']=$l_name;
        $name = $row['first_name']." ".$row['last_name'];;
        // $_SESSION['first_name']['last_name']=$name; 

        echo "
        <tr class='columns'>
                            <td> $s_num </td>
                            <td> $depart</td>
                            <td> $name </td>
                            <td><form method='post'><input type='submit' class='table' name='details' value='Details' style='background-color:#04AA6D'></form>
                            <form method='post'><input type='submit' class='table' name='delete' value='Delete' style='background-color:red'><form></td>
                        </tr>";


                        
                        if(isset($_POST['details'])){
                            header("Location:../HTML/salary.php");
                         }


                         if(isset($_POST['delete'])){
    
                            echo '<script>
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You wont be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Yes, delete it!"
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  Swal.fire(
                                    "Deleted!",
                                    "Your file has been deleted.",
                                    "success"
                                  )
                                }
                              })
                            // </script>';
                            
                            // $data_del = "DELETE from employee WHERE first_name= '$f_name' AND last_name='$l_name'";
                            // $result1= $dbconnection -> query($data_del);
                            // header("Location:details.php");
                        }
}

// if(isset($_POST['details'])){

// }

// if(isset($_POST['details'])){
//    header("Location:../HTML/salary.php");
//     // echo' 
//     // <script> 
//     //     function newPage(){
//     //         window.location.href="salary.php";
//     //     }
//     // </script>
//     // ';
// }

// if(isset($_POST['delete'])){
    
//     echo '<script>
//     Swal.fire({
//         title: "Are you sure?",
//         text: "You wont be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!"
//       }).then((result) => {
//         if (result.isConfirmed) {
//           Swal.fire(
//             "Deleted!",
//             "Your file has been deleted.",
//             "success"
//           )
//         }
//       })
//     // </script>';
    
//     // $data_del = "DELETE from employee WHERE first_name= '$f_name' AND last_name='$l_name'";
//     // $result1= $dbconnection -> query($data_del);
//     // header("Location:details.php");
// }
}
?>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
    <script src="../JS/dashboard.js"></script>
</body>

</html>
