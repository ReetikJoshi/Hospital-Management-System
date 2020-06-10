<?php include 'includes/patient_navigation_bar.php'; ?>
<style type="text/css">

    .a{
        background:lavender;
       
    }
    label{
        color:purple;
    }
    .btn:hover {
        background-color: purple; /* Green */
        color: white;    
    }
</style>


<div class="container a ">
    <div class="row mt-3">
        <div class="col-2"></div>
    
    <div class="col-8">
        <div class="h1" style="color:purple;">
            USER / EDIT PROFILE
        </div>
        <div class="h3 " style="color:purple;">
            Edit profile
        </div>
        <form action="action/act_patientregistration_update_data.php" method="Post" style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
            <?php
            if (isset($_GET['patientid'])) {
                $id = $_GET['patientid'];
                $query = "select * from patientregistration where id='$id'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_assoc($result);
            }
            ?>
            <div class="form-group">
                <input class="form-control" hidden type="text" name="id" value="<?= $data['id']; ?>" >
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input class="form-control" type="text" name="name" value="<?= $data['name']; ?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?= $data['address']; ?>">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" value="<?= $data['city']; ?>" >

            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender" value="<?= $data['gender']; ?>">
            </div>
            <div class="form-group">
                <input type="email" hidden class="form-control" name="email" value="<?= $data['email']; ?>" >
            </div>
            <div class="form-group">
                <input  class="btn btn-outline-dark btn-lg " type="submit" name="btn_update" value="Update">
            </div>
        </form>
    </div>
    <div class="col-2"></div>

</div>
    </div>


