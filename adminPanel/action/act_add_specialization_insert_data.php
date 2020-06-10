<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');

if(isset($_POST['btn_submit'])){
    $dspecialization=$_POST['dspecialization'];

    
     $query="insert into addspecialization (doctor_specialization)" . "values('$dspecialization')";
    $result= mysqli_query($con, $query);
    
    if($result){
         $_SESSION['msg']='Successfully inserted!!';
        header('location:../admin_add_specialization.php');
    }else{
        $_SESSION['msg']='Not inserted!!';
        header('location:../admin_add_specialization.php');
    }
}


