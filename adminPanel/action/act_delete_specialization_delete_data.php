<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');
if(isset($_GET['specializationid'])){
    $id=$_GET['specializationid'];
    $query="delete from addspecialization where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']='Specialization deleted successful!!';
        header('location:../admin_add_specialization.php');
    } else {
        $_SESSION['msg']='Specialization not deleted!!';
        header('location:../admin_add_specialization.php');
    }
}
