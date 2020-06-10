<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'hmspatient');

if (isset($_POST['btn_register'])) {
    $dspecialization = $_POST['dspecialization'];
    $dname = $_POST['dname'];
    $daddress = $_POST['daddress'];
    $dfee = $_POST['dfee'];
    $dcontact = $_POST['dcontact'];
    $demail = $_POST['demail'];
    $dpassword=md5($_POST['dpassword']);
    
    $query = "insert into doctorregistration (doctor_specialization, doctor_name, doctor_clinic_address, doctor_fee, doctor_contact, doctor_email, doctor_password)" . "values ('$dspecialization' , '$dname', '$daddress', '$dfee', '$dcontact', '$demail', '$dpassword')";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']="Account created successfully";
        header('location:../admin_doctor_registration.php');
    } else {
        $_SESSION['msg']="Account not created";
        header('location:../admin_doctor_registration.php');
    }
    
    
    
}