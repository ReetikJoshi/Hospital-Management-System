<?php

session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');
if(isset($_GET['msgdeleteid'])){
    $id=$_GET['msgdeleteid'];
    $query="delete from prescription where id='$id'";
    $result= mysqli_query($con, $query);
    if($result){
        $_SESSION['msg']='Message deleted successful!!';
        header('location:../patient_view_prescription_pagelink.php');
    } else {
        $_SESSION['msg']='Message not deleted!!';
        header('location:../patient_view_prescription_pagelink.php');
    }
}
