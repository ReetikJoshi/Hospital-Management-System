<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'hmspatient');

if (isset($_POST['btn_submit'])) {
    $valid = true;

    if (empty($_POST['doctor'])) {
        $valid = false;
        $_SESSION['erdoctor'] = "Please select doctor.";
        header('location:../patient_book_appointment.php');
    }
    
    if (empty($_POST['date'])) {
        $valid = false;
        $_SESSION['erdate'] = "Please select date.";
        header('location:../patient_book_appointment.php');
    }
    
    if (empty($_POST['time'])) {
        $valid = false;
        $_SESSION['ertime'] = "Please select time.";
        header('location:../patient_book_appointment.php');
    }

    if ($valid) {
        $dspecialization = $_POST['doctor'];
        $dname = $_POST['name'];
        $fee = $_POST['fees'];
        $date = $_POST['date'];
        $patient_name = $_POST['patient_name'];
        $useremail = $_POST['useremail'];
        $time = $_POST['time'];

        $query = "insert into patientbookappointment (doctor_specialization,doctor_name,consultancy_fee,date,patient_name,useremail,time)" . "values('$dspecialization','$dname','$fee','$date','$patient_name','$useremail','$time')";
        $result = mysqli_query($con, $query);

        if ($result) {
            $_SESSION['msg'] = 'Successfully booked!!';
            header('location:../patient_book_appointment.php');
        } else {
            $_SESSION['msg'] = 'Not booked!!';
            header('location:../patient_book_appointment.php');
        }
    }
}