<?php
session_start();
include("../config/db_conn.php");
require('../vendor/autoload.php');

use Rakit\Validation\Validator;

$validator = new Validator;

// print_r($validator);
// die;

$validation = $validator->make($_POST + $_FILES, [
    'employee_id'                 => 'required',
    'password'              => 'required',
]);

$validation->validate();

if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();
    $_SESSION['errors'] = $errors->toArray();
    header("Location:../index.php");
    // echo "<pre>";
    // print_r($errors->firstOfAll());
    // echo "</pre>";
    // exit;
} else {
    // validation passes
    // echo "Success!";
}

if(isset($_POST['submit'])){
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE employee_id = '".$employee_id."' AND password = '".$password."'";

    $result=mysqli_query($conn,$sql);
    
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['employee_id'] = $row['employee_id'];
        header("Location: ../worksheet.php");
    } else {
        
        echo "<script>
alert('Wooopsss! Wrong Employee Id or Password');
window.location.href='../index.php';
</script>";
        // header("Location: ../index.php");
    }
    
    
   
}

// if($_SERVER["REQUEST_METHOD"] == "POST") {

// // $employee_id = $_POST['employee_id'];
// // $password = $_POST['password'];

// $employee_id = mysqli_real_escape_string($conn,$_POST['employee_id']);
// $password = mysqli_real_escape_string($conn,$_POST['password']);



//         // $sql="SELECT * FROM employees WHERE employee_id='".$employee_id."'";

//         $sql = "SELECT * FROM employees WHERE emplyee_id='$employee_id'";

//         $result=mysqli_query($conn,$sql);
//         print_r($result);
//         die;

//         if ($result && mysqli_num_rows($result)===1) {
//             $row = mysqli_fetch_assoc($result);
//             // print_r($row);
//             // die;
//             if ($employee_id===$row['employee_id'] && $password===$row['password']) {
//                 // $_SESSION['email']=$row['email'];
//                 // $_SESSION['contact']=$row['contact'];
//                 // $_SESSION['id']=$row['id'];
//                 $_SESSION['employee']=$row;


//                 header("Location:../welcome.php");
//                 exit();
//             } 
//             else{
//                 header("Location:../index.php");
//                 exit();
//             }
//         }
//         else{
//             header("Location:../index.php");
//             exit();
//         }

//     }
