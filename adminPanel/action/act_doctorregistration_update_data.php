<?php
session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');

if(isset($_POST['btn_update'])){
    $id=$_POST['id'];
    $doctor_specialization=$_POST['dspecialization'];
    $doctor_name=$_POST['dname'];
    $doctor_clinic_address=$_POST['daddress'];
    $doctor_fee=$_POST['dfee'];
    $doctor_contact=$_POST['dcontact'];
    $doctor_email=$_POST['demail'];
    $query="update doctorregistration set doctor_specialization='$doctor_specialization', doctor_name='$doctor_name', doctor_clinic_address='$doctor_clinic_address', doctor_fee='$doctor_fee', doctor_contact='$doctor_contact', doctor_email='$doctor_email'  where id='$id'";
    echo '$id';
    $result= mysqli_query($con, $query);
    if($result){
         $_SESSION['msg']='Successfully updated!!';
        header('location:../doctorupdate.php');
    }else{
        $_SESSION['msg']='Not updated!!';
        header('location:../doctorupdate.php');
    }
        
    }
?>
