<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'hmspatient');

if (isset($_POST['btn_login'])) {
    $valid = true;
if(empty($_POST['email'])){
    $valid=false;
    $_SESSION['eremail']="Please Enter Email.";
    header('location:../admin_login.php');
}
if(empty($_POST['password'])){
    $valid=false;
    $_SESSION['erpassword']="Please Enter Password.";
    header('location:../admin_login.php');
}
    if ($valid) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "select * from adminregistration where email='$email' and password='$password'";
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($result);
        if ($data > 0) {
            $_SESSION['msg'] = 'Login Successful!!';
            $_SESSION['variable'] = $email;
            header('location:../admin_manage_patient.php');
        } else {
            $_SESSION['msg'] = 'Login Unsuccessful!!';
            header('location:../admin_login.php');
        }
    }
}
