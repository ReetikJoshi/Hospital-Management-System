<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');
if(isset($_GET['patientid'])){
    $id=$_GET['patientid'];
    $query="delete from patientregistration where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']='Appointment deleted successful!!';
        header('location:../admin_manage_patient.php');
    } else {
        $_SESSION['msg']='Appointment not deleted!!';
        header('location:../admin_manage_patient.php');
    }
}