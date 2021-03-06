<!DOCTYPE html>
<?php include 'includes/patient_navigation_bar.php'; ?>


<style>
    .a{
        background-color: blue;
        background:rgba(10,90,100,0.4);
    }
</style>
<div class="container a">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="h1">
                USER / BOOK APPOINTMENT
            </div>	
            <div class="h3">
                Book Appointment
            </div>

            <form action="action/act_doctor_update_appointment.php" method="POST" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
                <?php
                if (isset($_GET['patientid'])) {
                    $id = $_GET['patientid'];
                    $query = "select * from patientbookappointment where id='$id'";
                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="form-group">
                    <input  class="number" hidden name="id" value="<?= $data['id']; ?>" >
                </div>

                <div class="form-group" >
                    <label>Doctor Specialization</label>  
                    <select name="doctor" class="form-control-sm" >
                        <option><?= $data['doctor_specialization'] ?></option>                      
                    </select>
                </div>
                <div class="form-group">
                    <label>Doctors </label> 
                    <select name="name" class="form-control-sm" >
                        <option ><?= $data['doctor_name'] ?></option>                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Consultancy Fees</label> 
                    <input type="number" class="form-control" name="fees" value="<?= $data['consultancy_fee']; ?>" >
                </div>

                <div class="form-group">
                    <label>Date</label> 
                    <input type="date" class="form-control"  name="date">
                </div>
                <div class="form-group">
                    <label>Time</label>   
                    <div class=" bootstrap-timepicker timepicker">
                        <input id="timepicker1" type="text" name="time"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span>
                        <span class="input-group-addon"><i class="fas fa-caret-down fa-2x"></i></span>
                    </div>

                    <script type="text/javascript">
                        $('#timepicker1').timepicker();
                    </script>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="Submit" name="btn_update">
                </div>
            </form>


        </div>
    </div>
    <div class="col-2">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
</div>
