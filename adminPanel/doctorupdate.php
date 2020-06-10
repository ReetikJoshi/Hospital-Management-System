<?php include 'includes/doctornavigationbar.php'; ?>
<?php
if ($_SESSION['variable'] == "") {
    header("location:doctorlogin.php");
}
?>
<style>
    .row{
          background-color:	rgba(0,128,0,0.1);
    }
    label{
        color:green;
    }
    .btn:hover{
        background-color: green;
    }
</style>
<div class="container">
    <div class="row mt-3">
    <div class="col-2"></div>
    <div class="col-8">
        <label class="h1 text-success">DOCTORS / EDIT DOCTORS DETAIL </label>
        <h4 class="text-success">Edit profile</h4>
        <form action="action/act_doctorregistration_update_data.php" method="post" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
            <?php
            if (isset($_GET['doctorid'])) {
                $id = $_GET['doctorid'];
                $query = "select * from doctorregistration where id='$id'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_assoc($result);
            }
            ?>
            <div class="form-group">
                <input type="number" hidden class="form-control" name="id" value="<?= $data['id'] ?>">
            </div>
            <div class="form-group">
                <label>Doctor Specialization</label>
                <select name="dspecialization" >
                    <option><?= $data['doctor_specialization']; ?></option>                 
                </select>
            </div>
            <div class="form-group">
                <label>Doctors Name</label>
                <input type="text" class="form-control" name='dname' value="<?= $data['doctor_name'] ?>">
            </div>
            <div class="form-group">
                <label>Doctors Clinic Address</label>
                <input type="text" class="form-control" name='daddress' value="<?= $data['doctor_clinic_address'] ?>">
            </div>
            <div class="form-group">
                <label>Doctors Consultancy fees</label>
                <input type="text" class="form-control" name='dfee' value="<?= $data['doctor_fee'] ?>">
            </div>
            <div class="form-group">
                <label>Doctors Contact No</label>
                <input type="number" class="form-control" name='dcontact' value="<?= $data['doctor_contact'] ?>">
            </div>
            <div class="form-group">
                <input type="email" hidden class="form-control" name='demail' value="<?= $data['doctor_email'] ?>">
            </div>
            <div class="form-group">
                <input class="btn btn-outline-success btn-large" type="submit"  value="Update" name="btn_update">
            </div>
            <?php ?>
        </form>
    </div>
    <div class="col-2 text-success">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
</div>
    </div>