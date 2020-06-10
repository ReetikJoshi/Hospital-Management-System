<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'hmspatient');

if (isset($_POST['btn_submit'])) {
    $valid = true;
    if (empty($_POST['name'])) {
        $valid = false;
        $_SESSION['ername'] = "Please Enter your Name.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['address'])) {
        $valid = false;
        $_SESSION['eraddress'] = "Please Enter Your Address.";
        header("location:../patientregistration.php");
    }
     if (empty($_POST['city'])) {
        $valid = false;
        $_SESSION['ercity'] = "Please Enter Your City.";
        header("location:../patientregistration.php");
    }
     if (empty($_POST['gender'])) {
        $valid = false;
        $_SESSION['ergender'] = "Please Enter Your Gender.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['email'])) {
        $valid = false;
        $_SESSION['eremail'] = "Please Enter Your Email.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['password'])) {
        $valid = false;
        $_SESSION['erpassword'] = "Please Enter Your Password.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['cpassword'])) {
        $valid = false;
        $_SESSION['ercpassword'] = "Please confirm Your password.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['cpassword'])) {
        $valid = false;
        $_SESSION['ercpassword'] = "Please confirm Your password.";
        header("location:../patientregistration.php");
    }
    if (empty($_POST['checkbox'])) {
        $valid = false;
        $_SESSION['er'] = "Agree Our Terms.";
        header("location:../patientregistration.php");
    }

    if ($valid) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $query = "insert into patientregistration (name,address,city,gender,email,password,cpassword)" . "values ('$name','$address','$city','$gender','$email','$password','$cpassword')";
        $result = mysqli_query($con, $query);
        if ($result) {
            $_SESSION['msg'] = 'Successfully registered!!';
            header('location:../patient_login.php');
        } else {
            $_SESSION['msg'] = 'Not registered!!';
            header('location:../patientregistration.php');
        }
    }
}