 <?php
session_start();
$con= mysqli_connect('localhost', 'root', '', 'hmspatient');

if(isset($_POST['btn_login'])){
   $valid=true;
   if (empty($_POST['email'])){
       $valid=false;
        $_SESSION['eremail']="Please Enter Email.";
        header('location:../patient_login.php');
   }
   if (empty($_POST['password'])){
       $valid=false;
        $_SESSION['erpassword']="Please Enter Password.";
        header('location:../patient_login.php');
   }

   if($valid){
    $email=$_POST['email'];
    $password=($_POST['password']);
    
    $query="select * from patientregistration where email='$email' and password='$password'";
    $result= mysqli_query($con, $query);
    $data= mysqli_fetch_assoc($result);
            if($data>0){
                $_SESSION['variable']=$email;
                $_SESSION['msg']='You Are Logged In';
                header('location:../patient_book_appointment.php');
            }else{
                $_SESSION['msg']='log in failed';
                header('location:../patient_login.php');
            }
   }
}