<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');

if(isset($_POST['btn_update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
   
    
    $query="update patientregistration set name='$name', address='$address', city='$city', gender='$gender' , email='$email' where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
         $_SESSION['msg']='Successfully updated!!';
        header('location:../patient_update.php');
    }else{
        $_SESSION['msg']='Not updated!!';
        header('location:../patient_update.php');
    }
    
}