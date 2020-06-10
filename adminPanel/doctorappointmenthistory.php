<?php include 'includes/doctornavigationbar.php'; ?>
<?php
// include 'lib/DBConnection.php';
if ($_SESSION['variable'] == "") {
    header("location:doctorlogin.php");
}
?>
<style>
    .container{
        background-color:	rgba(0,128,0,0.1);

    }
</style>
<div class="container mt-3">
    <div class="col-1"></div>
    <div class="col-12">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <label class="h1 mb-4 text-success" >DOCTOR / APPOINTMENT HISTORY</label>
            </div>
            <div class="col-2"></div>
        </div>

        <table class="table table-hover table-striped" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
            <tr class="bg-dark text-danger">
                <th>No.</th>
                <th>Doctor Name</th>
                <th>Patient Name</th>
                <!--<th>Specialization</th>-->
                <!--<th>Consultancy Fee</th>-->
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Appointment Creation Date/Time</th> 
                <th>Action</th>
            </tr> 
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

            if (isset($_SESSION['variable'])) {
                $email = $_SESSION['variable'];
                $query = "select * from doctorregistration where doctor_email='$email'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_assoc($result);
                $name = $data['doctor_name'];
            }
            $query = "select * from patientbookappointment where doctor_name='$name'";
            $result = mysqli_query($con, $query);
            $i = 1;

            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="text-success">
                    <td><?= $i++ ?></td>
                    <td><?= $data['doctor_name']; ?></td>
                    <td><?= $data['patient_name']; ?></td>
                    <!--<td><?= $data['doctor_specialization']; ?></td>-->
                    <!--<td><?= $data['consultancy_fee']; ?></td>-->
                    <td><?= $data['date']; ?></td>
                    <td><?= $data['time']; ?></td>
                    <td><?= $data['appointment_creation']; ?></td>
                    <td>
                        <a href="action/act_doctor_delete_appointment.php?patientid=<?= $data['id'] ?>"><i class="fa fa-trash text-danger fa-2x"></i></a>
                        <a href="doctor_send_prescription.php?patientid=<?= $data['id'] ?>"><i class="fa fa-envelope-square text-primary fa-2x"></i></a>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="col-1 text-success">
        <?php
//        session_start();
        if (isset($_SESSION['msg1'])) {
            echo $_SESSION['msg1'];
            unset($_SESSION['msg1']);
        }
        ?>
    </div>
</div>