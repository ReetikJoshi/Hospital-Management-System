<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');
if(isset($_GET['patientid'])){
    $id=$_GET['patientid'];
    $query="delete from patientbookappointment where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']='Appointment deleted successful!!';
        header('location:../doctorappointmenthistory.php');
    } else {
        $_SESSION['msg']='Appointment not deleted!!';
        header('location:../doctorappointmenthistory.php');
    }
}
