<?php
session_start();
include("../config/db_conn.php");

// echo "<pre>";
//  print_r($_SERVER);
//     die;


if($_SERVER['REQUEST_METHOD']=='POST'){
    // print_r($_POST);
    // die;
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $work_done = $_POST['work_done'];
    $location = $_POST['location'];
    $employee_id = $_SESSION['employee_id'];

    $sql = "INSERT INTO worksheets (employee_id, start_time, end_time, work, location, date, time) VALUES ('$employee_id', '$start_time', '$end_time', '$work_done', '$location', NOW(), NOW())";

    $result = mysqli_query($conn, $sql);
    
    if($result){
        // echo "Data inserted Successfully";
        echo "<script>
alert('You've successfully submitted today's worksheet! Don't forget to fill up for tomorrow's ;-)');
window.location.href='../index.php';
</script>";
    }
}
?>
