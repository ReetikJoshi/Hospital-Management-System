<?php
session_start();
$con= mysqli_connect('localhost', 'root', '', 'hmspatient');

if(isset($_POST['doctortype'])){
   $doctortype=$_POST['doctortype'];
   if($doctortype!=null){    
    $query="select doctor_name,doctor_fee from doctorregistration where doctor_specialization='$doctortype'";
    $result= mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0){
      $data;//will hold all doctors name 
      $i=0;
      while($row=$result->fetch_array()){
        $data[$row['doctor_name']] = $row['doctor_fee'];
        $i++;
      }
      echo json_encode($data);
    }else echo '';
   }
}