<?php include 'includes/admin_navigation_bar.php' ?>
<style>
    .row{
        background: rgba(255, 0, 0, 0.1);
    }
    label{
        color:black
    }
</style>
<div class="container">
    <div class='row mt-3'>
        <div class="col-1"></div>
        <div class="col-8">
            <label class="h1 mb-3 text-danger ml-5">Add Doctors</label>
            <form action="action/act_doctorregistration_insert_data.php" method="post" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>

                <div class="form-group">
                    <label>Doctor Specialization</label>

                    <select name="dspecialization">
                        <?php
                        session_start();
                        $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

                        $query = "select * from addspecialization";
                        $result = mysqli_query($con, $query);
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <option><?= $data['doctor_specialization']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Doctors Name</label>
                    <input type="text" class="form-control" name="dname">
                </div>
                <div class="form-group">
                    <label>Doctors Clinic Address</label>
                    <input type="text" class="form-control" name="daddress">
                </div>
                <div class="form-group">
                    <label>Doctors Consultancy fees</label>
                    <input type="text" class="form-control" name="dfee">
                </div>
                <div class="form-group">
                    <label>Doctors Contact No</label>
                    <input type="number" class="form-control" name="dcontact">
                </div>
                <div class="form-group">
                    <label>Doctors Email</label>
                    <input type="email" class="form-control" name="demail">
                </div>
                <div class="form-group">
                    <label>Doctors Password</label>
                    <input type="password" class="form-control" name="dpassword">
                </div>
                <div class="form-group">
                    <input class="btn btn-danger" type="submit" value="Register" name="btn_register">

                </div>

            </form>
        </div>
        <div class="col-3 text-success">
              <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        </div>
    </div>
</div>
