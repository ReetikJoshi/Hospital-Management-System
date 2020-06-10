<?php include 'includes/doctornavigationbar.php'; ?>

<style>
    .b{
        position:absolute;
        top:170px;
        left:600px;
    }
</style>
<div class="container"> 
    <img class=" b" src="asset/images/aaa.jpg" alt="image not found" >
    <div class="row" style="border:1px solid black; padding: 25px; margin:10px">
        <div class="col-3"></div>
        <div class="col-6" >
            <h3 class='text-center' >Nepal Medicity Hospital</h3><br>
            <h6 class="text-center">Nakkhu,Lalitpur</h6>
            <hr>
        </div>
        <div class="col-3">
            <img class="col-12" src="asset/images/nepalmediciti.jpg" alt="image not found">
        </div>
        <div col-12>
            <form action="action/act_doctor_send_prescription_insert_data.php" method="post">
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'hmspatient');
                if (isset($_GET['patientid'])) {
                    $id = $_GET['patientid'];
                    $query = "select * from patientbookappointment where id='$id'";
                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);
                    $namee = $data['patient_name'];
                }
                ?>
                Patient's Name: <input type="text" class="form-control-sm" readonly value="<?php echo $namee; ?>" name="send_to">
                <br>

                <?php
                $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

                if (isset($_SESSION['variable'])) {
                    $email = $_SESSION['variable'];
                    $query = "select * from doctorregistration where doctor_email='$email'";
                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);
                    $name = $data['doctor_name'];
                }
//                $query = "select * from patientbookappointment where doctor_name='$name'";
//                $result = mysqli_query($con, $query);
//                $data = mysqli_fetch_assoc($result);
//                $useremail = $data['useremail'];
//
//                $query = "select * from patientregistration where useremail='$useremail'";
//                $result = mysqli_query($con, $query);
//                $data = mysqli_fetch_assoc($result);
//                $id = $data['id'];
//                ?>
<!--                Patient's ID: <input type="number" class="form-control-sm" readonly value="" name="id">-->
                <br>
                Doctor's Name:<input type = "text" class = "form-control-sm" readonly value = "<?php echo $name; ?>" name = "send_from">
                <hr>
                <h6>Recommendation:</h6>
                <textarea class = "form-control" style = "height:200px; width:800px; border:1px solid" name = "medicine">
                </textarea>
                <div class = "form-group">
                    <input type = "submit" class = "btn btn-primary mt-3" value = "Send" name = "btn_send">
                </div>
            </form>
        </div>
    </div>
    
</div>
