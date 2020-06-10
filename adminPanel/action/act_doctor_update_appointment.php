    <?php
session_start();
$con= mysqli_connect('localhost', 'root', '','hmspatient');

if(isset($_POST['btn_update'])){
    $id=$_POST['id'];
     $dspecialization=$_POST['doctor'];
    $dname=$_POST['name'];
    $fee=$_POST['fees'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    
    $query="update patientbookappointment set doctor_specialization='$dspecialization',doctor_name='$dname',consultancy_fee='$fee',date='$date' and time='$time' where id='$id'";
    $result= mysqli_query($con, $query);
    
    if($result){
         $_SESSION['msg']='Successfully updated!!';
        header('location:../doctorappointmenthistory.php');
    }else{
        $_SESSION['msg']='Not updated!!';
        header('location:../doctorappointmenthistory.php');
    }
}


