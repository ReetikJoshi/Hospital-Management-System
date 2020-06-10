<!DOCTYPE html>
<?php include 'includes/patient_navigation_bar.php'; ?>
<?php
if ($_SESSION['variable'] == "") {
    header("location:login.php");
}
?>
<div class="container"  style="min-height: 500px; background-color: lavender" >
    <div class="row mt-3">
        <div class="col-12">
            <div class=" h1 mb-3" style="color: purple; ">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-9">USER / APPOINTMENT HISTORY</div>
                    <div class="col-1"></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-light" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
                <tr style="background: rgba(40, 0, 90, 0.8);; color:white;">
                    <th>No.</th>
                    <th>Doctor Name</th>
                    <th>Specialization</th>
                    <th>Consultancy Fee</th>
                    <th>AppointmentDate</th>
                    <th>Appointment Time</th>
                    <th>Action</th>

                </tr>
                <?php
                if (isset($_SESSION['variable'])) {
                    $useremail = $_SESSION['variable'];
                }
                $query = "select * from patientbookappointment where useremail='$useremail'";
                $result = mysqli_query($con, $query);
                $i = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>


                    <tr class="text-dark" >
                        <td><?= $i++ ?></td>
                        <td><?= $data['doctor_name']; ?></td>
                        <td><?= $data['doctor_specialization']; ?></td>
                        <td><?= $data['consultancy_fee']; ?></td>
                        <td><?= $data['date']; ?></td>
                        <td><?= $data['time']; ?></td>
                        <td>
                            <a href="patient_update_appointment_form.php?patientid=<?= $data['id'] ?>"><i class="fa fa-edit text-primary fa-2x "></i></a>
                            <a href="action/act_patient_delete_appointment.php?patientid=<?= $data['id'] ?>"><i class="fa fa-trash text-danger fa-2x"></i></a>
                        </td>

                    </tr>
                <?php } ?>
            </table>
            <div>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
    </div>
</div>