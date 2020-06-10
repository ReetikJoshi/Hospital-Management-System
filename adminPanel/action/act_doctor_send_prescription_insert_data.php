<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'hmspatient');

if (isset($_POST['btn_send'])) {

    $send_to = $_POST['send_to'];
    $send_from = $_POST['send_from'];
    $medicine = $_POST['medicine'];

    $query = "insert into prescription (send_to,send_from,medicine)" . "values('$send_to','$send_from','$medicine')";
    $result = mysqli_query($con, $query);

    if ($result) {
//        $_SESSION['variable11']=$send_to;
        $_SESSION['msg1'] = 'Successfully sent!!';
        header('location:../doctorappointmenthistory.php');
    } else {
        $_SESSION['msg1'] = 'Not sent!!';
        header('location:../doctorappointmenthistory.php');
    }
}


