<?php
 session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');

if(isset($_POST['btn_login'])){
    
    $email=$_POST['demail'];
    $password=$_POST['dpassword'];
    
    $query="select * from doctorregistration where doctor_email='$email' and doctor_password='$password'";
    $result= mysqli_query($con, $query);
    $data= mysqli_fetch_assoc($result);
            if($data>0){
                
                $_SESSION['variable']=$email;
                $_SESSION['msg']='you are logged in';
                header('location:../doctorappointmenthistory.php');
            }else{
                $_SESSION['msg']='log in failed';
                header('location:../doctorlogin.php');
            }
    
}

