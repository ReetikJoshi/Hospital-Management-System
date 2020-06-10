<?php include 'includes/patient_navigation_bar.php'; ?>
<style>
    .a{
        position:absolute;
        top:170px;
        left:600px;
    }
</style>
<div class="container"> 
    <img class=" a" src="asset/images/aaa.jpg" alt="image not found" >
    <div class="row" style="border:1px solid black; padding: 25px; margin:10px">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class='text-center'>Nepal Medicity Hospital</h3><br>
            <h6 class="text-center">Nakkhu,Lalitpur</h6>
            <hr>
        </div>
        <div class="col-3">
            <img class="col-12" src="asset/images/nepalmediciti.jpg" alt="image not found">
        </div>
        <div col-12>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'hmspatient');
            if (isset($_GET['msgid'])) {
                $id = $_GET['msgid'];
                $query = "select * from prescription where id='$id'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_assoc($result);
                $name = $data['send_from'];
                $namee = $data['send_to'];
                $medicine = $data['medicine'];
            }
            ?>
            <hr>
            Patient's Name: <input type="text" class="form-control-sm" readonly value="<?php echo $namee; ?>" name="send_to">

            <br>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

            if (isset($_SESSION['variable'])) {
                $email = $_SESSION['variable'];
                $query = "select * from patientregistration where email='$email'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_assoc($result);
                $patientid = $data['id'];
            }
            ?>
            <br>
            Patient's ID: <input type="number" class="form-control-sm" readonly value="<?php echo $patientid; ?>" name="id">
            <br><br>
            Doctor's Name:<input type = "text" class = "form-control-sm" readonly value = "<?php echo $name; ?>" name = "send_from">
            <hr>
            <h6>Recommedation:</h6>
            <p style="height:300px; width:725px; border:1px solid"><?php echo $medicine; ?></p>
            <!--<textarea class = "form-control" style = "height:200px; width:800px" name = "medicine"></textarea>-->


            <button class="btn btn-primary" onclick="window.print()">print</button>
        </div>
    </div>




</form>

<div class = "col-1"></div>
</div>