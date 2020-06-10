<?php include 'includes/admin_navigation_bar.php'; ?>
<style>
    .col-12{
        background: rgba(255, 0, 0, 0.1);
    }
</style>
<div class="container mt-3">
    <div class="col-12">
        <label class="h1 mt-2 mb-3 ml-5 text-danger">Manage Doctors</label>
        <table class="table table-hover table-striped" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
            <tr class="bg-danger text-light">
                <th>No.</th>
                <th>Doctors Name</th>
                <th>Doctor specialization</th>
                <th>Doctors Clinic Address</th>
                <th>Doctors Consultancy fees</th>
                <th>Doctors Contact No</th>
                <th>Doctors Email</th>
                <!--<th>Current Status</th>-->
                <th>Action</th>
            </tr>
            <?php
            $query = "select * from doctorregistration";
            $result = mysqli_query($con, $query);
            $i = 1;
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td> <?= $i++; ?> </td>
                    <td><?= $data['doctor_name']; ?></td>
                    <td><?= $data['doctor_specialization']; ?></td>
                    <td><?= $data['doctor_clinic_address']; ?></td>
                    <td><?= $data['doctor_fee']; ?></td>
                    <td><?= $data['doctor_contact']; ?></td>
                    <td><?= $data['doctor_email']; ?>
                    <td>
                        <div class="row">
                            <!--<a href="patient_update_appointment_form.php?patientid=<?= $data['id'] ?>"><i class="fa fa-edit text-primary fa-2x mr-2 "></i></a>-->
                            <a href="action/act_admin_delete_doctor.php?patientid=<?= $data['id'] ?>"><i class="fa fa-trash text-danger fa-2x "></i></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>