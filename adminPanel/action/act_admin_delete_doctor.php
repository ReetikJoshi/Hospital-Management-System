<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');
if(isset($_GET['patientid'])){
    $id=$_GET['patientid'];
    $query="delete from doctorregistration where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']='Account deleted successful!!';
        header('location:../admin_manage_doctor.php');
    } else {
        $_SESSION['msg']='Account not deleted!!';
        header('location:../admin_manage_doctor.php');
    }
}