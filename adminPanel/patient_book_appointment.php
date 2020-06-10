<!DOCTYPE html>
<?php include 'includes/patient_navigation_bar.php'; ?>
<?php
//       require 'lib/DBConnection.php';    
if ($_SESSION['variable'] == "") {
    header("location:login.php");
}
?>
<style>
    .a{
        background-color: blue;
        background:rgba(10,90,100,0.4);
    }
</style>
<div class="container a mt-3" style="min-height: 500px; background-color: lavender">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="h1">
                USER / BOOK APPOINTMENT
            </div>	
            <div class="h3">
                Book Appointment
            </div>

            <form action="action/act_patientbookappointment_insert_data.php" method="POST">
                <div class="form-group" >
                    <span class=" text-danger float-right">
                        <?php
                        if (isset($_SESSION['erdoctor'])) {
                            echo $_SESSION['erdoctor'];
                            unset($_SESSION['erdoctor']);
                        }
                        ?>
                    </span>
                    <label>Doctor Specialization</label>  
                    <select name="doctor" class="form-control-sm" id= "doctortype" onchange="findDoctors(this.value)">
                        <option disabled selected value> -- select an option -- </option>
                        <?php
                        require 'lib/DBConnection.php';
                        $query = "select * from addspecialization ";
                        $result = mysqli_query($con, $query);
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?= $data['doctor_specialization'] ?>"><?= $data['doctor_specialization'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Doctors </label> 
                    <select name="name" class="form-control-sm" id="doctorname" onchange="changeFees(this.value)">
                        <option disabled selected value> -- select an option -- </option>
                        <?php
//                        require 'lib/DBConnection.php'; 
                        $query = "select doctor_name from doctorregistration";
                        $result = mysqli_query($con, $query);
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                                <!--<option><?= $data['doctor_name'] ?></option>-->
                            <?php
                            if (isset($_POST['doctor_name']))
                                $dname = $_POST['doctor_name'];
                            $_SESSION['dname'] = $dname;
                            ?>
                        <?php } ?>

                    </select>
                </div>
                <div class="form-group">
                    <label>Consultancy Fees</label> 
                    <?php
//                    require 'lib/DBConnection.php';
//                    if (isset($_SESSION['dname'])) {
//                        $dname = $_SESSION['dname'];
//
//                        $query = "select doctor_fee from doctorregistration where doctor_name='$dname'";
//                        $result = mysqli_query($con, $query);
//                        $data = mysqli_fetch_assoc($result);
                    ?>
                    <input type = "number" id="fees" class = "form-control" name = "fees" value='<?= $data['doctor_fee']; ?>' >

                </div>

                <div class="form-group">
                    <span class=" text-danger float-right">
                        <?php
                        if (isset($_SESSION['erdate'])) {
                            echo $_SESSION['erdate'];
                            unset($_SESSION['erdate']);
                        }
                        ?>
                    </span>
                    <label>Date</label> 
                    <input type="date" class="form-control"  name="date">
                </div>
                <div class="form-group">
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

                    if (isset($_SESSION['variable'])) {
                        $email = $_SESSION['variable'];
                        $query = "select * from patientregistration where email='$email'";
                        $result = mysqli_query($con, $query);
                        $data = mysqli_fetch_assoc($result);
                        $name = $data['name'];
                    }
                    ?>

                    <input type="text" hidden value="<?php echo $name; ?>" class="form-control"  name="patient_name">
                </div>


                <div class="form-group">
                    <?php if (isset($_SESSION['variable'])) { ?>
                        <input type="email" hidden value="<?php echo $_SESSION["variable"] ?>" class="form-control"  name="useremail">
                    <?php } ?>
                </div>
                <div class="form-group">
                    <span class=" text-danger float-right">
                        <?php
                        if (isset($_SESSION['ertime'])) {
                            echo $_SESSION['ertime'];
                            unset($_SESSION['ertime']);
                        }
                        ?>
                    </span>
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
                    <input class="btn btn-success" type="submit" value="Submit" name="btn_submit">
                </div>
            </form>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Dont Know whom to choose??</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Enter Your Problem</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Give us your problem and we will try to recommend a doctor for you.</p>
                            <div class="form-group">
                                <input class="form-control" type="text" name="problem" id="patientProblem" autofocus="true" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="recommend()">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <div class="col-2 text-success ">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script type="text/javascript">

                            var doctornames = [];
                            var doctorfees = [];
                            var data;

                            function recommend() {
                                let problem = $('#patientProblem').val();
                                $(document).ready(function () {
                                    $.post('action/act_recommend.php', {problem: problem}, function (doctortype, status) {
                                        console.log(typeof (doctortype) + doctortype);
                                        doctortype = JSON.parse(doctortype);
                                        if (doctortype != "false") {
                                            console.log(doctortype[0]);
                                            doctortype = doctortype[0];// 2 ta suggestion aauda ni 1st suggestion select
                                            if (doctortype != "false") {
                                                $("#doctortype option[value=" + doctortype + "]").prop('selected', true);
                                                findDoctors(doctortype);
                                            }
                                        }
                                    });
                                });
                            }


                            function findDoctors(doctortype) {
                                $(document).ready(function () {
                                    $.post('action/act_find_doctors.php', {doctortype: doctortype}, function (res, status) {
                                        // console.log("doctor names"+res);
                                        data = JSON.parse(res);
                                        doctornames = [];
                                        doctorfees = [];
                                        for (var key in data) {
                                            doctornames.push(key);
                                            doctorfees.push(data[key]);
                                        }

                                        let html = '';
                                        for (var i = 0; i < doctornames.length; i++) {
                                            html += '<option>' + doctornames[i] + '</option>';
                                        }
                                        $("#doctorname").children().remove();
                                        $("#doctorname").append(html);
                                        $("#fees").val(doctorfees[0]);

                                    });
                                });
                            }
                            function changeFees(doctorname) {
                                $("#fees").val(data[doctorname]);
                            }

</script>

